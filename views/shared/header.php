

<header class="bg-dark text-white py-3 px-2">
    <nav class="d-flex justify-content-between ">
        <h1>Gestion</h1>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                Home
                </a>
            </li>
            <li class="nav-item">
                
                <?
                //check if user is guest
                if(isGuest()){
                ?>
                <a class="nav-link" href="/?route=login">
                Login
                <?
                }
                ?>

                <?              
                //check if user is user
                if(isUser()){
                ?>
                <a class="nav-link" href="/?route=contacts">
                Contacts
                <?
                }
                ?>

                <?              
                //check if user is admin
                if(isAdmin()){
                ?>
                <a class="nav-link" href="/?route=companies">
                Companies
                <?
                }
                ?>
                
                
                
                </a>
            </li>
            <li class="nav-item">
                
                   <?
                //check if user is guest
                if(isGuest()){
                ?>
                <a class="nav-link" href="/?route=register">
                register
                <?
                }
                            
                //check if user is user or admin
                else{
                ?>
                <a class="nav-link" href="/?route=logout">
                logout
                <?
                };
                ?>

              
                
                </a>
            </li>
 
        </ul>
    </nav>
</header>