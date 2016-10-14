<div class="control">
    <h1>Teste Control</h1>

<div class="row">
    <?php if($this->session->flashdata("aviso")){ ?>
        <?= $this->session->flashdata("aviso"); ?>
    <?php } ?>
    <div>
    <?php
    if(isset($carteiras)){
        foreach ($carteiras as $carteira){
            ?>
    <table class="table table-striped tables">
        <thead>
        <tr style="background: <?= $carteira['ds_cor'] ?>">
            <td colspan="4" class="table-title"><span class="fa fa-money"> </span><?= ' - '. $carteira['nm_carteira'] ?></td>
            <td class="table-opt">
                <a href="" title="Editar Carteira"><span class="fa fa-pencil"></span> </a>
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
    </div
    </div
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