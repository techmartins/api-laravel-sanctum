<?php

namespace App\Http\Controllers;

use App\Models\Vendas;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vendas::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'vendedor_id' => 'required',
            'valor' => 'required'
        ]);

        $request['comissão'] = $request->valor * 0.085;

        return Vendas::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Vendas::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vendas = Vendas::find($id);
        $vendas->update($request->all());
        return $vendas;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Vendas::destroy($id);
    }

    // public function enviaNotificacao($parceiro, $valor, $nova_pontuacao, $empresa, $destinatario)
    // {
    //     $data_envio_email = date('d-m-Y H:i');
    //     $assunto_email = "Notificação de Pontuação do Club Arq&Design";
    //     $headers  = 'MIME-Version: 1.0' . "\r\n";
    //     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    //     $headers .= 'From: ClubArq &Design <osniwellington@gmail.com>';

    //     $html_email = "<style type='text/css'>
    //             body {
    //             margin:0px;
    //             font-family:Verdane;
    //             font-size:12px;
    //             color: #666666;
    //             }
    //             a{
    //             color: #666666;
    //             text-decoration: none;
    //             }
    //             a:hover {
    //             color: #FF0000;
    //             text-decoration: none;
    //             }
    //             </style>
    //             <html>
    //                 <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
    //                     <tr>
    //                         <td>
    //                             <tr>
    //                                 <td width='500'>Olá, $parceiro</td>
    //                             </tr>
    //                             <tr>
    //                                 <td width='500'>Você foi pontuado em mais $valor pontos, pela empresa $empresa, e poderá acompanhar seus relatórios pelo site: <a href:'http://painel.clubarqedesign.com.br/'>www.clubarqedesign.com.br</a></td>
    //                             </tr>
    //                             <tr>
    //                                 <td width='320'>Club Arq & Design
    //                                 Construir e decorar, as melhores empresas no mesmo lugar!
    //                                 (11) 93773-8037</b></td>
    //                             </tr>
    //                         </td>
    //                     </tr>
    //                     <tr>
    //                         <td>
    //                             Sua pontuação atual é: $nova_pontuacao.
    //                         </td>
    //                     </tr>
    //                     <tr>
    //                         <td>
    //                             E-mail gerada em $data_envio_email.
    //                         </td>
    //                     </tr>
    //                 </table>
    //             </html>
    //         ";
    //         $destino = $destinatario;
    //         $enviar_email = mail($destino, $assunto_email, $html_email, $headers);

    //         if($enviar_email){
    //             $mgm = "sucesso";
    //         }else{
    //             $mgm = "falha";
    //         }
        
    //     return $mgm;
    // }
}
