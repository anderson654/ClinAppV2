<?php

namespace App\Http\Controllers;

use App\Models\Aws\TemporaryS3Url;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    public function saveImageProfile(Request $request)
    {
        $professional = Professional::where('user_id', Auth::user()->id)->first();
        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $path = 'clinpro/perfil/';
            $nameImage = Str::uuid() . $image->getClientOriginalExtension();

            $professional->avatar = $nameImage;
            $professional->save();

            Storage::disk('s3')->put($path . $nameImage, file_get_contents($image), 'public');
            $url = Storage::disk('s3')->url($path);
            return $url;
        } else {

            return 'Nenhuma imagem selecionada.';
        }

        return response()->json(['message' => 'Nenhuma imagem enviada.'], 400);
    }


    public function saveImage(Request $request, $path = 'clinpro/documents/', $public = 0)
    {
        Log::info($request->all());
        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $nameImage = Str::uuid() . "." .$image->getClientOriginalExtension();

            Storage::disk('s3')->put($path . $nameImage, file_get_contents($image), $public ? 'public' : 'private');
            $url = Storage::disk('s3')->url($path . $nameImage);
            return $url;
        }

        return response()->json(['message' => 'Nenhuma imagem enviada.'], 400);
    }

    public function dowloadImage($path)
    {
        $path = $path;

        $exists = Storage::disk('s3')->exists($path);
        if ($exists) {
            $file = Storage::disk('s3')->get($path);
            return $file;
        }
        return null;
    }


    public function saveImages(Request $request)
    {
        // $newRequest = new Request();
        // $files = $request->hasFile('imagens');
        $imagens = $request->file('imagens');
        //array images
        $linksAws = [];
        for ($i = 0; $i < sizeof($imagens); $i++) {
            # code...
            $newRequest = new Request();
            $imagem = $request->file("imagens.$i");
            $newRequest->files->set('imagem', new UploadedFile(
                $imagem->getPathname(),
                $imagem->getClientOriginalName(),
                $imagem->getClientMimeType()
            ));
            $result = $this->saveImage($newRequest, $request->path, true);
            array_push($linksAws, $result);
        }

        return array_reverse($linksAws);
    }

    public function getDocument(Request $request)
    {
        $path = parse_url($request->url, PHP_URL_PATH);
        // $filename = 'seu-arquivo.jpg';
        $expiration = now()->addSeconds(3600); // Expira em 3600 segundos (1 hora)

        $sql = TemporaryS3Url::where('file',$path);
        if($sql->exists()){
            $temporarys3url = $sql->first();
            //verifica se temp esta vencido
            if(now() < $temporarys3url->validate){
                return response()->json(['url' => $temporarys3url->temporary_url]);
            }
        }

        $signedUrl = Storage::disk('s3')->temporaryUrl($path, $expiration);
        TemporaryS3Url::updateOrCreate(
            ['file' => $path],
            ['temporary_url' => $signedUrl,'validate' => $expiration]
        );
        return response()->json(["url" => $signedUrl]);
    }
}
