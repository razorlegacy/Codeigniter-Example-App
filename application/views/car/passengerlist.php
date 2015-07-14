<?php $this->load->view('header', array("page" => "/car/carlist")); ?>
<ol class="breadcrumb">
  <li>
    <a href="/car/carlist/">Cars</a>
  </li>
  <li>
    <a href="/car/detail/<?php echo $car->getId(); ?>">
      <?php echo $car->getName(); ?>
    </a>
  </li>
  <li class="active">Passengers</li>
</ol>
<div class="panel panel-default" id="passenger_list">
  <table class="table table-striped table-hover">
    <caption>
      Passenger List <br>
      <?php echo $message; ?>
      <?php echo $error; ?>
    </caption>
    <thead>
    <tr>
      <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($passengers as $passenger): ?>
    <tr>
      <td><?php echo $passenger->getFirstName() . " " . $passenger->getLastName(); ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>
<div class="panel panel-default" id="new_passenger">
  <form class="form-horizontal" action="/passenger/addPassenger" method="POST">
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
    <div class="form-group">
      <label for="passenger_first_name" class="col-sm-2 control-label">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="passenger_first_name" placeholder="First Name" name="passenger_first_name">
      </div>
    </div>
    <div class="form-group">
      <label for="passenger_last_name" class="col-sm-2 control-label">First Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="passenger_last_name" placeholder="Last Name" name="passenger_last_name">
      </div>
    </div>
    <input type="hidden" name="passenger_car" value="<?php echo $car->getId(); ?>"/>
    <input type="submit" class="btn btn-default" value="Add Passenger"/>
  </form>
</div>