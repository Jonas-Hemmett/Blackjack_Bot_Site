<nav>   
        <a class="<?php 
        if ($pathParts['filename'] == "index"){
            print 'activePage';
        }  
        ?> " href=index.php>About</a>

        <a class="<?php 
        if ($pathParts['filename'] == "housing"){
            print 'activePage';
        }  
        ?> " href=housing.php>Housing</a>

        <a class="<?php 
        if ($pathParts['filename'] == "strategy"){
            print 'activePage';
        }  
        ?> " href=strategy.php>My Strategy</a>

        <a class="<?php 
        if ($pathParts['filename'] == "ui"){
            print 'activePage';
        }  
        ?> " href=ui.php>User Interface</a>

        <a class="<?php 
        if ($pathParts['filename'] == "coding"){
            print 'activePage';
        }  
        ?> " href=coding.php>Coding</a>


        <a class="<?php 
        if ($pathParts['filename'] == "ai"){
            print 'activePage';
        }  
        ?> " href=ai.php>AI</a>

        
        <a class="<?php 
        if ($pathParts['filename'] == "next"){
            print 'activePage';
        }  
        ?> " href=next.php>Next Steps</a>

          <a class="<?php 
        if ($pathParts['filename'] == "demos"){
            print 'activePage';
        }  
        ?> " href=demos.php>Demos</a>
</nav>  