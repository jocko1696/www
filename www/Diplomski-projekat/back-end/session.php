<?php

if(isset($_SESSION['user'])) {
    if ($_SESSION['user'] == 'guest') {
        $username=$_SESSION['user'];

        ?>
        <script>
           window.onload=function (){
                let nav_items=document.getElementById('nav-items');
                nav_items.style.display='block';
                let listItem=document.querySelector('.logo-link');
                let newItem=document.createElement('li');
                newItem.innerHTML='<a class="link-item link username">Guest</a>';
                listItem.parentNode.replaceChild(newItem,listItem);

               listItem=document.querySelector('.bag-link');
               newItem=document.createElement('li');
               newItem.innerHTML='<a class="link-item link" href="../front-end/logout.php">Log out</a>';
               listItem.parentNode.replaceChild(newItem,listItem);

            }
        </script>
        <?php

    }
    else if ($_SESSION['status'] == 'user') {
        $username = $_SESSION['user'];
        ?>
        <script>
        window.onload=function (){
            let nav_items=document.getElementById('nav-items');
            nav_items.style.display='block';
            let listItem=document.querySelector('.logo-link');
                let newItem=document.createElement('li');
                newItem.innerHTML='<a class="link-item link username"><?php echo $username ?></a>';
                listItem.parentNode.replaceChild(newItem,listItem);

               listItem=document.querySelector('.bag-link');
               newItem=document.createElement('li');
               newItem.innerHTML='<a class="link-item link" href="../front-end/logout.php">Log out</a>';
               listItem.parentNode.replaceChild(newItem,listItem);

            }
        </script>
        <?php

        exit();
    }
    else if ($_SESSION['status'] == 'admin') {
        header("Location: ../admin/admin.php");
        exit();
    }

}else{

    ?>
    <script>
    window.onload=function (){
        let listItem=document.querySelector('.logo-link');
        let newItem=document.createElement('li');
        newItem.innerHTML='<a href="../front-end/login.php"><img src="../images/img/user.png" alt=""></a>';
        listItem.parentNode.replaceChild(newItem,listItem);

        listItem=document.querySelector('.bag-link');
        newItem=document.createElement('li');
        newItem.innerHTML='<a href="#"><img src="../images/img/bag.png" alt=""></a>';
        listItem.parentNode.replaceChild(newItem,listItem);

    }
</script>
<?php
    header("Location: ../front-end/index.php");
    exit();
}


