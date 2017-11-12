</body>
<footer>
  <!--displays binary code -->
  <?php if ($currentPage == 'binary'):?>
  <?php echo decbin(date('Y')).'<span><strong>© | 01000001 01101100 01101100 00100000 01110010 01101001 01100111 01101000 01110100 01110011 00100000 01110010 01100101 01110011 01100101 01110010 01110110 01100101 01100100 ☺ 01010100 01100001 01101101 </span></strong>';?><br></br>
  <!--displays normal text -->
  <?php else : ?> <?php echo date('Y').'<span><strong>© | All rights reserved ☺ Tam </span></strong>';
  ?><br></br>
  <?php endif; ?>

  <?php if ($currentPage == 'binary'):?>
   <a class="nav-footer" href="<?=$page->facebook->shareUrl?>">01000110 01100001 01100011 01100101 01100010 01101111 01101111 01101011
  <?php else : ?><a href="<?=$page->facebook->shareUrl?>">Facebook</a>
  <?php endif; ?>
  <br></br>
  <?php if ($currentPage == 'binary'):?>
    <a class="nav-footer" href="<?=$page->twitter->shareUrl?>">01110100 01110111 01101001 01110100 01110100 01100101 01110010
  <?php else : ?><a href="<?=$page->twitter->shareUrl?>">Twitter</a>
  <?php endif; ?>
  <br></br>
  <?php if ($currentPage == 'binary'):?>
    <a class="nav-footer" href="<?=$page->linkedin->shareUrl?>">01001100 01101001 01101110 01101011 01100101 01100100 01001001 01101110
    <?php else : ?><a href="<?=$page->linkedin->shareUrl?>">LinkedIn</a>
    <?php endif; ?>

</footer>

</html>
