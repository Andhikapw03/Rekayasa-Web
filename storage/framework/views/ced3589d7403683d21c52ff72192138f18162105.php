<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD MENGGUNAKAN LIVEWERE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#"><img src="https://usm.ac.id/wp-content/uploads/2022/10/Logo-USM.png" width="25" height="35"></a>
      <a class="navbar-brand" href="#">CRUD MENGGUNAKAN LIVEWERE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>

        </div>
      </div>
    </form>
  </div>
</nav>

    <div class="container">
        <div class="row justify-content-center mt-3">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mahasiswa')->html();
} elseif ($_instance->childHasBeenRendered('1e9BHyK')) {
    $componentId = $_instance->getRenderedChildComponentId('1e9BHyK');
    $componentTag = $_instance->getRenderedChildComponentTagName('1e9BHyK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1e9BHyK');
} else {
    $response = \Livewire\Livewire::mount('mahasiswa');
    $html = $response->html();
    $_instance->logRenderedChild('1e9BHyK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH /Users/Andhika/UAS-Rekayasa-Web/resources/views/home.blade.php ENDPATH**/ ?>