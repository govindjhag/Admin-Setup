
<div class="row clearfix">
    <div class="col s12 m6 l9">
        <h3 style="margin-top:0px;"><?= __('Categories') ?></h3>
    </div>
    <div class="fixed-action-btn horizontal">
    <a href="<?php echo $this->Url->build(array('controller'=>'Categories','action'=>'add')); ?>" class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
  </div>
</div>
<div class="row clearfix">
  <ol class="breadcrumb">
    <li class="active">Category</li>
  </ol>
</div>
<div class="clearfix" >
    <table class="table table-striped">
        <tr>
          <th scope="col">S. No.</th>
          <th scope="col"><?= $this->Paginator->sort('name') ?></th>
          <th scope="col">Icon</th>
          <th scope="col"><?= $this->Paginator->sort('created') ?></th>
          <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
          <th scope="col">Packages (Count)</th>
          <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php
        if($categories){
          $i = 1;
          foreach ($categories as $category): ?>
          <tr>
              <td><?= $i ?></td>
              <td><?= h($category->name) ?></td>
              <?php if(!empty($category->image_url)){ ?>
                <td><img style="width:80px; height:80px;" src="<?=$this->Url->build('/img/category_image/', TRUE).$category->image_url ?>" /></td>
              <?php }else{ ?>
                <td><img style="width:80px; height:80px;" src="<?=$this->Url->build('/img/No_icon_red.svg', TRUE) ?>" /></td>
                <?php
              } ?>

              <td><?= h($category->created) ?></td>
              <td><?= h($category->modified) ?></td>
              <td><?= $this->Html->link(__('View Packages ('.$category->package_count.')'), ['controller'=>'packages','action' => 'index', $category->id]) ?></td>
              <td class="actions">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $category->id]) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id]) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
              </td>
          </tr>
          <?php $i++; ?>
          <?php endforeach;
        }else{ ?>
          <td colspan="6" align="center">No record found</td>

        <?php
        }
        ?>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
