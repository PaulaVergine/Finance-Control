<div class="control">
    <h1>Teste Control</h1>
    <?php if($this->session->flashdata("aviso")){ ?>
        <?= $this->session->flashdata("aviso"); ?>
    <?php } ?>

<div class="row">
    <div class="tables-carteira">
    <?php
    if(isset($carteiras)){
        foreach ($carteiras as $carteira){
            ?>
    <table class="table table-striped tables">
        <thead>
        <tr style="background: <?= $carteira['ds_cor'] ?>">
            <td colspan="4" class="table-title"><span class="fa fa-money"> </span><?= ' - '. $carteira['nm_carteira'] ?></td>
            <td class="table-opt">
                <a href="#" class="editaCarteira" title="Editar Carteira" data-toggle="modal" data-target="#myModal" data-title="Editar Carteira" data-action="<?= base_url('index.php/carteira/editarCarteira/'.$carteira['cd_carteira']) ?>"><span class="fa fa-pencil"></span> </a>
                <a href="<?= base_url('index.php/carteira/deletarCarteira/'.$carteira['cd_carteira'])?>" title="Deletar Carteira"><span class="fa fa-remove"></span> </a>
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
    </div>
    <div class="row">
        <div class="tables-conta">
            <?php
            if(isset($contas)){
                foreach ($contas as $conta){
                    ?>
                    <table class="table table-striped tables">
                        <thead>
                        <tr style="background: <?= $conta['ds_cor'] ?>">
                            <td colspan="4" class="table-title"><span class="fa fa-gg"> </span><?= ' - '. $conta['nm_conta'] .' - '. $conta['banco']?></td>
                            <td class="table-opt">
                                <a href="#" class="editaConta" title="Editar Conta" data-toggle="modal" data-target="#myModal" data-title="Editar Conta" data-action="<?= base_url('index.php/conta/editarConta/'.$conta['cd_conta']) ?>"><span class="fa fa-pencil"></span> </a>
                                <a href="<?= base_url('index.php/conta/deletarConta/'.$conta['cd_conta'])?>" title="Deletar Conta"><span class="fa fa-remove"></span> </a>
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
    </div>
</div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <form action="" class="modal-form" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-2 col-md-offset-1">
                                <label for="cor">Cor: </label>
                                <input type="color" placeholder="" name="cor" class="form-control"/>
                            </div>
                            <div class="form-group col-md-6 col-md-offset-1">
                                <label for="nome">Nome: </label>
                                <input type="text" placeholder="Nome" name="nome" class="form-control"/>
                            </div>
                        </div>
                        <div class="row hide" id="contaFields">
                            <div class="form-group col-md-3 col-md-offset-1">
                                <label for="tipo">Tipo: </label>
                                <input type="text" placeholder="" name="tipo" class="form-control"/>
                            </div>
                            <div class="form-group col-md-4 col-md-offset-1">
                                <label for="banco">Banco </label>
                                <input type="text" placeholder="" name="banco" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group col-md-2 col-md-offset-10">
                            <input type="submit" value="Salvar" name="submitNovaTabela" class="btn btn btn-success btn-sm" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>