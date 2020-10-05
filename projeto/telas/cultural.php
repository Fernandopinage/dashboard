<?php

    @$nome = $_POST['nome'];
    @$email = $_POST['email'];
    @$cpf = $_POST['cpf'];
    @$rg = $_POST['rg'];
    @$telefone = $_POST['telefone'];
    @$celular = $_POST['celular'];
    @$cep = $_POST['cep'];
    @$uf = $_POST['uf'];
    @$cidade = $_POST['cidade'];
    @$bairro = $_POST['bairro'];
    @$logradouro = $_POST['logradouro'];
    @$complemento = $_POST['complemento'];
    @$tipo = $_POST['tipo'];
    @$fimcont = $_POST['fimcont'];
    @$pagamento = $_POST['pagamento'];
    @$forpag = $_POST['forpag'];
    @$dep1 = $_POST['dep1'];
    @$dep2 = $_POST['dep2'];
    @$dep3 = $_POST['dep3'];
    @$dep4 = $_POST['dep4'];
    @$dep5 = $_POST['dep5'];
    @$dep6 = $_POST['dep6'];
    @$dep7 = $_POST['dep7'];
    @$dep8 = $_POST['dep8'];
    @$dep9 = $_POST['dep9'];
    
    $name = "txt.txt";

    $dados = array($nome,$email,$cpf,$rg,$telefone,$celular,$cep,$uf,$cidade,$bairro,$logradouro,
    $complemento,$tipo,$fimcont,$pagamento,$forpag,$dep1,$dep2,$dep3,$dep4,$dep5,$dep6,$dep7,$dep8,$dep9);
   
    $file = fopen($name, 'a');

    foreach ($dados as $dado){

        fwrite($file, $dado.PHP_EOL);

    }

    fclose($file);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
   
    <title>Document</title>
</head>
<body>
   
<div class="container">
<br>
        <style>

            input{
                font-variant:small-caps;

            }

            

        </style>

    <form action="../txt/index.php" method="POST" >

    <!-- Dados Pessoais -->

        <div class="form-group card border" style="padding: 35px 35px 35px 35px; ">
        
                <div class="form-group row ">

                    <div class=" col-md-6">
                        <label for="inputEmail4">Nome Completo:</label>
                        <input type="text" name='nome' class="form-control" required="true">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4">Email:</label>
                        <input type="text" name='email' class="form-control" required="true">
                    </div>


                </div>

                <div class="form-group row">
                    

                        <div class=" col-md-3">
                            <label for="inputEmail4">CPF:</label>
                            <input type="text" name='cpf' class="form-control" oninput="mascara(this, 'cpf')" maxlength='14'required="true">
                        </div>
                        <div class="col-md-3">
                                <label for="inputEmail4">RG:</label>
                            <input type="text" name='rg' id='rg' class="form-control" maxlength='10'required="true">
                        </div>
                        <div class=" col-md-3">
                            <label for="inputEmail4">Celular:</label>
                            <input type="text" name='celular' class="form-control" oninput="mascara(this, 'tel')">
                        </div>
                        <div class="col-md-3">
                                <label for="inputEmail4">Telefone:</label>
                            <input type="text" name='telefone' class="form-control" oninput="mascara(this, 'tel')">
                        </div>
                    
                </div>
                
        </div>

         <!-- Endereço Pessoais -->

         <div class="form-group card border" style="padding: 35px 35px 35px 35px; ">
        
                <div class="form-group row">

                    <div class=" col-md-3">
                        <label for="inputEmail4">CEP:</label>
                        <input type="text"  name="cep" id="cep" class="form-control" oninput="mascara(this, 'cep')">
                    </div>
                    <div class="col-md-1">
                        <label for="inputEmail4">Nº:</label>
                        <input type="text" name='numero' class="form-control" >
                    </div>
                    <div class="col-md-1">
                        <label for="inputEmail4">UF:</label>
                        <input type="text" name='uf' id='uf' class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4">Cidade:</label>
                        <input type="text" name="cidade" id='cidade' class="form-control" >
                    </div>
                    <div class="col-md-4">
                        <label for="inputEmail4">Logradouro:</label>
                        <input type="text" name="logradouro" id='rua' class="form-control">
                    </div>


                </div>

                <div class="form-group row">
                    

                        <div class=" col-md-4">
                            <label for="inputEmail4">Bairro:</label>
                            <input type="text" name="bairro" id='bairro' class="form-control">
                        </div>
                        <div class="col-md-8">
                                <label for="inputEmail4">Complemento:</label>
                            <input type="text" name="complemento" class="form-control" >
                        </div>
                        
                </div>

        
        </div>
        
        <!-- Contrato -->

        <div class="form-group card border" style="padding: 35px 35px 35px 35px; ">
        
                <div class="form-group row">

                    <div class=" col-md-3">
                        <label for="inputEmail4">Tipo:</label>
                        <select class="custom-select" name="tipo" id="inputGroupSelect01">
                            <option value="0"></option>   
                            <option value="1">ANUAL</option>
                            <option value="2">MENSAL</option>
                            
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4">Fim de Contrato:</label>
                        <input type="date" name="fimcont" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4">Pagamento:</label>
                        <select class="custom-select" name="pagamento" id="inputGroupSelect01">
                            <option value="0"></option>
                            <option value="1">DIA 01</option>
                            <option value="2">DIA 05</option>
                            <option value="2">DIA 10</option>
                            <option value="2">DIA 15</option>
                            <option value="2">DIA 20</option>
                            <option value="2">DIA 25</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4">Forma de Pagamento:</label>
                        <select class="custom-select" name="forpag" id="inputGroupSelect01">
                            <option value="0"></option>
                            <option value="1">AVISTA</option>
                            <option value="2">PARCELADO</option>
                            
                        </select>
                    </div>
                   
                </div>

        </div>

        <!-- Dependentes -->

        <div class="form-group card border" style="padding: 35px 35px 35px 35px; ">
        
                <div class="form-group row">

                    <div class=" col-md-4">
                        <label for="inputEmail4">Dependente:</label>
                        <input type="text" name="dep1" class="form-control" >
                    </div>
                    <div class=" col-md-4">
                        <label for="inputEmail4">Dependente:</label>
                        <input type="text" name="dep2" class="form-control" >
                    </div>
                    <div class=" col-md-4">
                        <label for="inputEmail4">Dependente:</label>
                        <input type="text" name="dep3" class="form-control" >
                    </div>
                


                </div>
                <div class="form-group row">

                    <div class=" col-md-4">
                        <label for="inputEmail4">Dependente:</label>
                        <input type="text" name="dep4" class="form-control" >
                    </div>
                    <div class=" col-md-4">
                        <label for="inputEmail4">Dependente:</label>
                        <input type="text" name="dep5" class="form-control" >
                    </div>
                    <div class=" col-md-4">
                        <label for="inputEmail4">Dependente:</label>
                        <input type="text" name="dep6" class="form-control" >
                    </div>
                    
                </div>
                <div class="form-group row">

                <div class=" col-md-4">
                    <label for="inputEmail4">Dependente:</label>
                    <input type="text" name="dep7" class="form-control" >
                </div>
                <div class=" col-md-4">
                    <label for="inputEmail4">Dependente:</label>
                    <input type="text" name="dep8" class="form-control" >
                </div>
                <div class=" col-md-4">
                    <label for="inputEmail4">Dependente:</label>
                    <input type="text" name="dep9" class="form-control" >
                </div>

            </div>
                
        </div>

        <input class="btn btn-primary btn-lg" type="submit" value='SALVAR'>
    </form>

<!-- VIA CEP -->


<script>  
$(document).ready(function() {

function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
    $("#rua").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#uf").val("");
    $("#ibge").val("");
}

//Quando o campo cep perde o foco.
$("#cep").blur(function() {

    //Nova variável "cep" somente com dígitos.
    var cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#rua").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#uf").val("...");
            $("#ibge").val("...");

            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#rua").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#uf").val(dados.uf);
                    $("#ibge").val(dados.ibge);
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
});
});
 </script>


<!-- mascara de campos -->

    <script type="text/javascript">
			function mascara(i,t){
   
        var v = i.value;
        
        if(isNaN(v[v.length-1])){
            i.value = v.substring(0, v.length-1);
            return;
        }
        
        if(t == "data"){
            i.setAttribute("maxlength", "10");
            if (v.length == 2 || v.length == 5) i.value += "/";
        }

        if(t == "cpf"){
            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";
        }

        if(t == "cnpj"){
            i.setAttribute("maxlength", "18");
            if (v.length == 2 || v.length == 6) i.value += ".";
            if (v.length == 10) i.value += "/";
            if (v.length == 15) i.value += "-";
        }

        if(t == "cep"){
            i.setAttribute("maxlength", "9");
            if (v.length == 5) i.value += "-";
        }

        if(t == "tel"){
            if(v[0] == 9){
                i.setAttribute("maxlength", "10");
                
                if (v.length == 5) i.value += "-";
            }else{
                i.setAttribute("maxlength", "9");
                if (v.length == 4) i.value += "-";
                }
            }
   
    }


		</script>

</div>

</body>
</html>