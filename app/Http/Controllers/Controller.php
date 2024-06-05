<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     /**
     * @inherited
     *
     * I'm overwriting this function because I just want to return a json response no matter what (this is an API)
     * @param RequestData|Request $request
     * @param array $errors
     * @return \Illuminate\Http\Response|\Symfony\Component\HttpFoundation\Response
     */
    protected function buildFailedValidationResponse(RequestData $request, array $errors)
    {
        return $this->api->setStatusCode(422)->respondWithError($errors);
//     return new JsonResponse($errors, 422);  // something like this? if you haven't built your own way to return json responses.
    }
}
