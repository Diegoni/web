<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">
                
            </li>
            <ul class="sidebar-menu">
                <li class="header">
                </li>
                <?php
                
                foreach ($menu as $row) {
                    if($this->uri->segment(1).'/'.$this->uri->segment(2).'/' == $row->link){
                        echo '<li class="treeview active">';
                    }else{
                        echo '<li class="treeview">';
                    }
                   
                    echo '<a href="'.base_url().'index.php/'.$row->link.'">';
                    echo '<i class="fa fa-circle-o"></i> '.$row->menu.'</a>';
                    echo '</li>';
                }
                
                ?>
            </ul>
        </ul>            
    </section>
</aside>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        <?php 
        $titulo     = str_replace("_", " ", $subjet);
        $subtitulo  = str_replace("_", " ", $this->uri->segment(2));
        echo $titulo; 
        echo '<small>'.$subtitulo.'</small>';
        ?>
        </h1>
    </section>