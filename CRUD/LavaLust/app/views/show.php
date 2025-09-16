<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show</title>
  <link rel="stylesheet" href="<?=base_url();?>public/css/style.css">
</head>
<body>
  <div class="container">
    <h1>Welcome to Show View</h1>

    <div class="card">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach(html_escape($students) as $student): ?>
            <tr>
              <td><?=$student['id'];?></td>
              <td><?=$student['last_name'];?></td>
              <td><?=$student['first_name'];?></td>
              <td><?=$student['email'];?></td>
              <td>
 <a href="<?=site_url('user/update/'.$student['id']);?>" class="btn update">Update</a>
<a href="<?=site_url('user/delete/'.$student['id']);?>" class="btn delete"
   onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
</td>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="actions">
      <a href="<?=site_url('/user/create');?>" class="btn create">Create Record</a>
    </div>
  </div>
</body>
</html>
