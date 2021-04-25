<?php $items=wp_get_menu_array('navigation');?>
<nav class="navbar navbar-expand-lg navbar-light col py-1">
  <li class="navbar-barand show-nav" style="cursor:pointer">
    <a class="nav-link" style="background:#6a15c7;margin:0">
      <svg fill="white" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
      </svg></a>
    <div class="side-nav p-3">
      <?php get_template_part('home-parts/sidenav');?>
    </div>
  </li>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="d-flex w-100">
    <div class="collapse navbar-collapse text-center" id="main-menu">
      <ul class="navbar-nav">
        <?php foreach($items as $item):?>
        <li class="nav-item dropdown">
          <a class="nav-link" href="<?php echo $item['url'];?>">
            <?php echo $item['title'];?>
            <?php if($item['children']):?>
            <a data-toggle="dropdown">
              <svg height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1"
                viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <polygon style="fill:#fff" ;="" points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 ">
                </polygon>
              </svg>
            </a>
            <div class="dropdown-menu">
              <?php foreach($item['children'] as $sitem):?>
              <a class="dropdown-item" href="<?php echo $sitem['url'];?>">
                <?php echo $sitem['title'];?>
              </a>
              <?php endforeach;?>
            </div>
            <?php endif;?>
          </a>
        </li>
        <?php endforeach;?>
      </ul>

      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a href="#" data-toggle="modal" data-target="#staticBackdrop" style="
                  display: flex;
                  align-items: center;
                  height: 100%;
                  margin-left: 15px;
                  ">
            <i class="fas fa-search text-light"></i>
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>