<h1>Index Page</h1>
<p>MySampleData Index View.</p>
<table>
<?php foreach ($datas as $data): ?>
  <tr>
    <td><?php echo $data['MySampleData']['name']; ?></td>
    <td><?php echo $data['MySampleData']['mail']; ?></td>
    <td><?php echo $data['MySampleData']['tel']; ?></td>
  </tr>
<?php endforeach; ?>
<?php foreach ($videos as $video): ?>
  <tr>
    <td><?php echo $video['NewVideoTable']['id']; ?></td>
    <td><?php echo $video['NewVideoTable']['v_url']; ?></td>
    <td><?php echo $video['NewVideoTable']['i_url']; ?></td>
    <td><?php echo $video['NewVideoTable']['title']; ?></td>
  </tr>
<?php endforeach; ?>
</table>