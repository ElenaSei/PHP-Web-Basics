<form method="get">
    <div>
        <input type="text" name="name" placeholder="Name"/>
    </div>
    <div>
        <input type="text" name="age" placeholder="Age"/>
    </div>
    <form>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="submit">
    </form>
    <?php if (isset($_GET['name']) && isset($_GET['age'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];
        echo "My name is $name. I am $age years old. I am $gender.";
    }
    ?>
</form>