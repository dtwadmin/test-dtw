<?php
    $this->load->view("site/theme/header");
    $this->load->view("site/theme/navbar");
    $this->load->view("site/pages/".$page);
    $this->load->view("site/theme/footer");
?>