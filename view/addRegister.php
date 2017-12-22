<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= isset($title) ? $title : null; ?></title>
</head>
<body>
    <form method="POST" accept-charset="utf-8">
        <input type="hidden" name="id_user" value="<?= isset($result['id_user']) ? $result['id_user'] : null; ?>">
        <div>
            <label>First Name</label>
            <input type="text" name="firstName" value="<?= isset($result['firstName']) ? $result['firstName'] : null; ?>">
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" name="lastName" value="<?= isset($result['lastName']) ? $result['lastName'] : null; ?>">
        </div>
        <div>
            <label>Gender</label>
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female
        </div>
        <div>
            <label>Addres</label>
            <input type="text" name="address" value="<?= isset($result['address']) ? $result['address'] : null; ?>">
        </div>
        <div>
            <label>Date of birthday</label>
            <input type="date" name="dob" value="<?= isset($result['lastName']) ? $result['lastName'] : null; ?>">
        </div>
        <div>
            <input type="submit" name="submit" value="simpan">
            <a href="index.php" title="Back">Back</a>  
        </div>
    </form>
</body>
</html>