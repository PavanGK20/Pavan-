 <?php
function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}
$fields = [
  'Full name'    => $_POST['fullname'] ?? '',
  'Email'        => $_POST['email'] ?? '',
  'Phone'        => $_POST['phone'] ?? '',
  'Gender'       => $_POST['gender'] ?? '',
  'Date of birth'=> $_POST['dob'] ?? '',
  'Address'      => $_POST['address'] ?? '',
  'Applying for' => $_POST['course'] ?? '',
];
?><!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Submitted</title></head><body>
  <h2>Application Submitted</h2>
  <?php foreach($fields as $k=>$v): ?>
    <p><strong><?php echo h($k); ?>:</strong> <?php echo nl2br(h($v)); ?></p>
  <?php endforeach; ?>
  <p><a href="index.html">Back to form</a></p>
</body></html>