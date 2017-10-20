<?php
$path = $_SERVER['PHP_SELF'];
$page = basename($path);
$page = basename($path, '.php');
?>

	<div class="span3 columns">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li<?php if($page == 'index'): ?> class="active"<?php endif ?>><a href="index.php">Home</a></li>
              <li<?php if($page == 'map'): ?> class="active"<?php endif ?>><a href="map.php">Map</a></li>
              <li class="nav-header">PR Firms</li>
              <li<?php if($page == 'bahrain-press-club'): ?> class="active"<?php endif ?>><a href="bahrain-press-club.php">Bahrain Press Club</a></li>
              <li<?php if($page == 'bell-pottinger'): ?> class="active"<?php endif ?>><a href="bell-pottinger.php">Bell Pottinger</a></li>
              <li<?php if($page == 'bgr-group'): ?> class="active"<?php endif ?>><a href="bgr-group.php">BGR Group</a></li>
              <li<?php if($page == 'big-tent-communications'): ?> class="active"<?php endif ?>><a href="big-tent-communications.php">Big Tent Communications</a></li>
              <li<?php if($page == 'cloud-media-entertainment'): ?> class="active"<?php endif ?>><a href="cloud-media-entertainment.php">Cloud Media Entertainment</a></li>
              <li<?php if($page == 'dragon-associates'): ?> class="active"<?php endif ?>><a href="dragon-associates.php">Dragon Associates</a></li>
              <li<?php if($page == 'g3'): ?> class="active"<?php endif ?>><a href="g3.php">G3</a></li>
              <li<?php if($page == 'gardant-communications'): ?> class="active"<?php endif ?>><a href="gardant-communications.php">Gardant Communications</a></li>
              <li<?php if($page == 'hill-knowlton'): ?> class="active"<?php endif ?>><a href="hill-knowlton.php">Hill + Knowlton Strategies</a></li>
              <li<?php if($page == 'joe-trippi'): ?> class="active"<?php endif ?>><a href="joe-trippi.php">Joe Trippi &amp; Associates</a></li>
              <li<?php if($page == 'mark-stewart-productions'): ?> class="active"<?php endif ?>><a href="mark-stewart-productions.php">Mark Stewart Productions</a></li>
              <li<?php if($page == 'mc-saatchi'): ?> class="active"<?php endif ?>><a href="mc-saatchi.php">M&amp;C Saatchi</a></li>
              <li<?php if($page == 'new-century-media'): ?> class="active"<?php endif ?>><a href="new-century-media.php">New Century Media</a></li>
              <li<?php if($page == 'olton'): ?> class="active"<?php endif ?>><a href="olton.php">Olton</a></li>
              <li<?php if($page == 'policy-impact-communications'): ?> class="active"<?php endif ?>><a href="policy-impact-communications.php">Policy Impact Communications</a></li>
              <li<?php if($page == 'potomac-square-group'): ?> class="active"<?php endif ?>><a href="potomac-square-group.php">Potomac Square Group</a></li>
              <li<?php if($page == 'qorvis'): ?> class="active"<?php endif ?>><a href="qorvis.php">Qorvis Communications</a></li>
              <li<?php if($page == 'sanitas-international'): ?> class="active"<?php endif ?>><a href="sanitas-international.php">Sanitas International</a></li>
              <li<?php if($page == 'sorini-samet-associates'): ?> class="active"<?php endif ?>><a href="sorini-samet-associates.php">Sorini, Samet &amp; Associates</a></li>
            </ul>
          </div><!--/.well -->
        </div>
      </div>
    </div>
