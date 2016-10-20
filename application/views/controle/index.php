<div class="control">
    <h1>Finance Control - <?php echo $usuario['nm_usuario'] ?></h1>

    <?php if($this->session->flashdata("aviso")){ ?>
        <?= $this->session->flashdata("aviso"); ?>
    <?php } ?>

<div class="row">
    <div class="tables-carteira">
    <?php
    if(isset($carteiras) && !empty($carteiras)){
        echo '<h2>Carteiras</h2>';
        foreach ($carteiras as $carteira){
            ?>
    <table class="table table-striped tables">
        <thead>
        <tr style="background: <?= $carteira['ds_cor'] ?>">
            <td colspan="4" class="table-title"><span class="fa fa-money"> </span><?= ' - '. $carteira['nm_carteira'] ?></td>
            <td class="table-opt">
                <a href="#" class="editaCarteira" title="Editar Carteira" data-toggle="modal" data-target="#myModal" data-title="Editar Carteira" data-nome="<?= $carteira['nm_carteira'] ?>" data-cor="<?= $carteira['ds_cor'] ?>" data-action="<?= base_url('index.php/carteira/editarCarteira/'.$carteira['cd_carteira']) ?>"><span class="fa fa-pencil"></span> </a>
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
    <hr/>
    <div class="row">
        <div class="tables-conta">
            <?php
            if(isset($contas)&& !empty($contas)){
                echo '<h2>Contas</h2>';
                foreach ($contas as $conta){
                    ?>
                    <table class="table table-striped tables">
                        <thead>
                        <tr style="background: <?= $conta['ds_cor'] ?>">
                            <td colspan="4" class="table-title"><span class="fa fa-gg"> </span><?= ' - '. $conta['nm_conta'] .' - '. $conta['banco']?></td>
                            <td class="table-opt">
                                <a href="#" class="editaConta" title="Editar Conta" data-toggle="modal" data-target="#myModal" data-title="Editar Conta" data-nome="<?= $conta['nm_conta'] ?>" data-cor="<?= $conta['ds_cor'] ?>" data-tipo="<?= $conta['tipo'] ?>" data-banco="<?= $conta['banco'] ?>" data-action="<?= base_url('index.php/conta/editarConta/'.$conta['cd_conta']) ?>"><span class="fa fa-pencil"></span> </a>
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
    <hr/>
    <div class="row">
        <div class="tables-cartao">
            <?php
            if(isset($cartoes) && !empty($cartoes)){
                echo '<h2>Cartões</h2>';
                foreach ($cartoes as $cartao){
                    ?>
                    <table class="table table-striped tables">
                        <thead>
                        <tr style="background: <?= $cartao['ds_cor'] ?>">
                            <td colspan="4" class="table-title"><span class="fa fa-credit-card"> </span><?= ' - '. $cartao['nm_cartao'] .' - '. $cartao['bandeira'].' - Vencimento dia: '.$cartao['dt_vencimento']?></td>
                            <td class="table-opt">
                                <a href="#" class="editaCartao" title="Editar Cartao" data-toggle="modal" data-target="#myModal" data-title="Editar Cartão" data-nome="<?= $cartao['nm_cartao'] ?>" data-cor="<?= $cartao['ds_cor'] ?>" data-tipo="<?= $cartao['tipo'] ?>" data-bandeira="<?= $cartao['bandeira'] ?>" data-dtvenc="<?= $cartao['dt_vencimento'] ?>" data-dtvalid="<?= $cartao['dt_validade'] ?>" data-action="<?= base_url('index.php/cartao/editarCartao/'.$cartao['cd_cartao']) ?>"><span class="fa fa-pencil"></span> </a>
                                <a href="<?= base_url('index.php/cartao/deletarCartao/'.$cartao['cd_cartao'])?>" title="Deletar Cartão"><span class="fa fa-remove"></span> </a>
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
                                <input type="color" name="cor" class="form-control" />
                            </div>
                            <div class="form-group col-md-6 col-md-offset-1">
                                <label for="nome">Nome: </label>
                                <input type="text" name="nome" class="form-control" />
                            </div>
                        </div>
                        <div class="row hide" id="contaFields">
                            <div class="form-group col-md-3 col-md-offset-1">
                                <label for="tipo">Tipo: </label>
                                <select name="tipo" class="form-control">
                                    <option value="Corrente">Corrente</option>
                                    <option value="Poupança">Poupança</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-md-offset-1">
                                <label for="banco">Banco </label>
                                <input type="text" name="banco" class="form-control" />
                            </div>
                        </div>
                        <div class="hide" id="cartaoFields">
                            <div class="row">
                                <div class="form-group col-md-4 col-md-offset-1">
                                    <label for="tipo">Tipo: </label>
                                    <input type="text" name="tipo" class="form-control" />
                                </div>
                                <div class="form-group col-md-4 col-md-offset-1">
                                    <label for="bandeira">Bandeira </label>
                                    <input type="text" name="bandeira" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3 col-md-offset-1">
                                    <label for="dt_vencimento">Dia Vencimento: </label>
                                    <input type="text" name="dt_vencimento" class="form-control" />
                                </div>
                                <div class="form-group col-md-4 col-md-offset-2">
                                    <label for="dt_validade">Data Validade: </label>
                                    <input type="text" name="dt_validade" class="form-control" />
                                </div>
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