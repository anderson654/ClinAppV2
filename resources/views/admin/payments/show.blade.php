@extends('layouts.app')

@section('content')
    <h3 class="page-title">Pagamento</h3> 

    <div class="panel panel-default">
        @if($payment->payment_type == 'C')        
            <div class="panel-heading">
                <div class="p-3 mb-2 bg-success text-white"><h4><strong>Cédito (Entrada) </strong></h4> </div>
            </div>
        @elseif($payment->payment_type == 'D')
            <div class="panel-heading ">  
                <div class="p-3 mb-2 bg-danger text-white"> <h4><strong> Débito (Saída) </strong></h4> </div> 
            </div>
        @else
            ERRO
        @endif </td> 
				
        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
					
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Cliente</th>
                            <td field-key='title'>{{ $payment->user->name or '' }}</td>
                        </tr>
						<tr>
                            <th>Lista dos serviços desta Fatura</th>
                            @if(isset($payment->order))
                                @if(count($payment->order->services) > 0)
                                    @foreach ( $payment->order->services as $service)
                                        <td field-key='title'>{{ $service->id or '' }}</td>
                                    @endforeach
                                @endif
                            @endif
						</tr>
						<tr>
                            <th>ORDER</th>
                            <td field-key='title'>{{  $payment->order->id or ''}}  </td>
                        </tr>
                        
						 <tr>
                            <th>Valor da Fatura</th>
                            <td field-key='title'>{{  'R$ '.number_format($payment->value, 2, ',', '.')}}  </td>
                        </tr>
                        {{--  <tr>
                            <th>Valor da taxas dessa fatura</th>                           
                            @if($payment->billingAsaas)
                                $fee = $payment->billingAsaas->valueBilling - $payment->billingAsaas->netValue;
                                <td field-key='title'>{{  'R$ '.number_format($fee, 2, ',', '.')}}  </td>
                            @endif
                            
                        </tr>  --}}
                        <tr>
                            <th>Desconto Serviço</th>
                            <td field-key='title'>{{  'R$ '.number_format($payment->discount, 2, ',', '.')}}  </td>
                        </tr>
						<tr>
                            <th>Método do pagamento</th>
							<td field-key='title'>{{ $payment->payment_method->title or '' }}</td>							
                        </tr>
						<tr>
                            <th>Mês da referrência</th>
                            <td field-key='title'>{{ $payment->reference_month or ''}}  </td>
                        </tr>
						<tr>
                            <th>Status</th>
                            <td field-key='title'>{{ $payment->payment_status->title}}  </td>
                        </tr>
                        <tr>
                            <th>Link da Fatura</th>
                            @if($payment->billingAsaas)
                                <td field-key='title'>{{ $payment->billingAsaas->invoiceUrl or ''}}  </td>
                            @endif
                        </tr>
						<tr>
                            <th>Data de criação</th>
                            
                            <td field-key='title'>{{ \Carbon\Carbon::createFromFormat("Y-m-d H:i:s", $payment->created_at)->format("d/m/y H:i") }}  </td>
                        </tr>
						<tr>
                            <th>Data de vencimento</th>
                            <td field-key='title'>{{  $payment->due_date ? \Carbon\Carbon::createFromFormat("Y-m-d", $payment->due_date)->format("d/m/y H:i") : 'vazio'  }}  </td>
                        </tr>
						<tr>
                            <th>Data de pagamento</th>
                            <td field-key='title'>{{ $payment->payment_date}}  </td>
                        </tr>
						<tr>
                            <th>Valor Pago</th>
                            <td field-key='title'>{{  'R$ '.number_format($payment->payment_amount, 2, ',', '.')}}  </td>
                        </tr>
					
						<tr>
                            <th>Código da Fatura (Boleto Fácil)</th>
                            <td field-key='title'>{{ $payment->code_boletofacil or $payment->billingAsaas?$payment->billingAsaas->invoiceNumber:'vazio'}}  </td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.payments.index') }}" class="btn btn-default">@lang('abrigosoftware.as_back_to_list')</a>
        </div>
    </div>
@stop


