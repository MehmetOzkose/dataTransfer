<?php 
header('Content-Type: text/html; charset=utf-8');
echo $title;
echo "<br />";
echo $heading;
echo "<br />";
echo "Dizi elemanları yazdırılıyor";
echo "<br/>";
?>
<ul>
<?php foreach ($todo_list as $item):?>

<li><?php echo $item;?></li>

<?php endforeach;?>
</ul>