<div class="row clearfix">
    <div class="col s12 m6 l9">
        <h3 style="margin-top:0px;"><?= __('Arts') ?></h3>
    </div>
    <div class="fixed-action-btn horizontal">
    <a href="<?php echo $this->Url->build(array('controller'=>'Arts','action'=>'add',$package_id)); ?>" class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
  </div>
</div>
<div class="row clearfix">
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(array('controller'=>'Categories','action'=>'index')); ?>">Category</a></li>
    <li><a href="<?php echo $this->Url->build(array('controller'=>'Packages','action'=>'index',$category_id)); ?>">Package</a></li>
    <li class="active">Arts</li>
  </ol>
</div>
<div class="clearfix" >
    <table class="table table-striped">
        <tr>
          <th scope="col">S. No.</th>
          <th scope="col"><?= $this->Paginator->sort('name') ?></th>
          <th scope="col"><?= $this->Paginator->sort('image_url') ?></th>
          <th scope="col">Type</th>
          <th scope="col"><?= $this->Paginator->sort('created') ?></th>
          <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
          <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php
        if($arts){
          $i=1;
          foreach ($arts as $art): ?>
          <tr>
              <td><?= $i ?></td>
              <td><?= h($art->name) ?></td>
              <td><img style="width:80px;height:80px;" src="<?=$this->Url->build('/img/art_image/', TRUE).$art->image_url ?>" /></td>
              <td><?php if($art->is_free==1){echo "Free";}else{echo "Paid";} ?></td>
              <td><?= h($art->created) ?></td>
              <td><?= h($art->modified) ?></td>
              <td class="actions">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $art->id]) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $art->id]) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $art->id], ['confirm' => __('Are you sure you want to delete # {0}?', $art->id)]) ?>
              </td>
          </tr>
          <?php
            $i++;
            endforeach;
        }else{ ?>
          <tr>
            <td colspan="6" align="center">No record found</td>
          </tr>
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
