<style>
    #search{
        border: 0; 
    }
    #bar{
        border-radius: 10px;
    }
    #h-bar{
        justify-content: space-between;
    }
    #profil{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: px solid #fff;
    }
    a[alt^='el_a']{
        text-decoration: none;
        color: black;
    }
    #person{
        background-color: rgb(238, 238, 238);
        border-radius: 20px;
    }
    #bouton{
        background-color: blue;
    }
</style>
<section class="container mx-auto">
    <div class="col-12 mx-5" id="h-bar">
        <div class="row">
            <div class="row border px-3 mt-3 col-4 text-start" id="bar">
                <form action="#" method="post">
                    <input type="text" size="30%" name="search" id="search" placeholder="Rechercher un club de HandBall" class="fa fa-search py-2">
                </form>
                <span><i class="fa fa-search py-2 text-end"></i></span>
            </div>
            <div class="mx-5 mt-3 text-right col-7">
                <span class="container text-right">
                    <i class="fa fa-bell-o px-1" style="font-size: 25px;"></i>
                    <i class="fa fa-comment-o px-1" style="font-size: 25px;"></i>
                </span>
                <?php if(!empty($_SESSION['profil']) && isset($_SESSION['profil'])){ ?>
                    <span class="container text-right px-2">
                            <img src="images/img-joueur/<?=$_SESSION['profil']?>" alt="" class="img" id="profil">
                    </span>
                <?php }else{ ?>
                    <span class="container text-right px-2">
                            <i class="fa fa-user" style="font-size: 30px;"></i>
                    </span>
                <?php } ?>
                <span>
                    HandBall
                    <i class="fa fa-angle-down px-1" style="font-size: 20px;"></i>
                </span>
            </div>
        </div>
    </div>
    <hr width="95%">
</section>