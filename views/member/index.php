<?php
use yii\bootstrap\Html;
?>
<h1>สมาชิกทั้งหมด</h1>

<br/>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>ชื่อ</th>
      <th>นามสกุล</th>
      <th>วัน/เดือน/ปี เกิด</th>
      <th>อีเมล์</th>
      <th>ที่อยู่</th>
      <th>เบอร์โทรศัพท์</th>
      <th class="text-center"><?=Html::a(Html::icon('plus'),['register'],['class'=>'btn btn-link']) ?> </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($member as $data) { ?>
    <tr>
      <td><?=$data->firstname?></td>
      <td><?=$data->lastname?></td>
      <td><?=$data->birthday?></td>
      <td><?=$data->email?></td>
      <td><?=$data->address?></td>
      <td><?=$data->tel?></td>
      <td class="text-center">
        <?=Html::a(Html::icon('pencil'),['update','id'=>$data->id],['class'=>'']) ?>
        <?=Html::a(Html::icon('trash'),['delete','id'=>$data->id],['class'=>'','onClick'=>"return confirm('Are you sure want to delete this field ?');"]) ?>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
