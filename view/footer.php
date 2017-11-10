</body>
<footer>
  <!-- insert decimal to binary conversion
  <?php if ($currentPage == 'binary'):?>
    <?php $year = date('Y'); ?>
    <?php $binary = year/2;?>
    <?php $bin_length = strlen($binary);?>
  -->
  <?php else : ?> <?php echo date('Y').'<span><strong>© | All rights reserved ☺ Tam </span></strong>';
  ?><br></br>
  <?php endif; ?>

  <?php if ($currentPage == 'binary'):?>
   <a class="nav-footer" href="<?=$page->facebook->shareUrl?>">01000110 01100001 01100011 01100101 01100010 01101111 01101111 01101011
  <?php else : ?> Facebook </a>
  <?php endif; ?>
  <br></br>
  <?php if ($currentPage == 'binary'):?>
    <a class="nav-footer" href="<?=$page->twitter->shareUrl?>">01110100 01110111 01101001 01110100 01110100 01100101 01110010
  <?php else : ?> Twitter </a>
  <?php endif; ?>
  <br></br>
  <?php if ($currentPage == 'binary'):?>
    <a class="nav-footer" href="<?=$page->linkedin->shareUrl?>">01001100 01101001 01101110 01101011 01100101 01100100 01001001 01101110
    <?php else : ?> LinkedIn </a>
    <?php endif; ?>

</footer>

</html>
