<div class="control">
    <h1>Teste Control</h1>

<div class="row">
    <div>
    <?php
    if(isset($carteiras)){
        foreach ($carteiras as $carteira){
            ?>
    <table class="table table-striped tables">
        <thead>
        <tr style="background: <?= $carteira['ds_cor'] ?>">
            <td colspan="4" class="table-title"><?= $carteira['nm_carteira'] ?></td>
            <td class="table-opt">
                <a href="" title="Nova Carteira"><span class="fa fa-plus"></span> </a>
                <a href="" title="Deletar Carteira"><span class="fa fa-remove"></span> </a>
            </td>
        </tr>
        <tr class="hidden">
            <th>Data</th>
            <th>Descricão</th>
            <th>Valor</th>
            <th>Origem</th>
            <th>Operações</th>
        </tr>
        </thead>
        <tbody class="hidden">
    <?php 
    if(!empty($movimentacoes)){
        foreach ($movimentacoes as $registro){ ?>
        <tr>
            <td><?= $registro['dt_movimentacao'] ?></td>
            <td><?= $registro['ds_movimentacao'] ?></td>
            <td><?= $registro['vl_movimentacao'] ?></td>
            <td><?= $registro['vl_movimentacao'] ?></td>
            <td><span class="fa fa-pencil"></span> <span class="fa fa-trash-o"></span></td>
        </tr>
    <?php }
    }else{ ?>
            <tr><td colspan="5" class="text-center"> Ainda não há registros.</br> Adicionar um novo Registro:</br> <a href="#novoRegistro" title="Novo Registro"><span class="fa fa-plus-circle"></span></a></td> </tr>
    <?php } ?>
        </tbody>
    </table>
    <?php } }?>

    </div>
    </div
    </div
</div>