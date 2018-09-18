<div class="row">
  <img src="/img/Ripe-Mgmt-Banner.jpg"/>
</div>
<div class="row">
  <div class="col dsk-12 tbt-12 mob-12 text-center">
    <a href="mailto:info@ripe-mgmt.com" class="text-black text-no-decal">
      info@ripe-mgmt.com
    </a>
  </div>
</div>
<div class="row">
  <div class="col dsk-8 dsk-off-2 tbt-10 tbt-off-1 mob-12 col-mt-30 col-mb-30">
    <div class="text-center text-2em col-mt-30"><b>News</b></div>
    <div class="row news-section col-mt-30 col-mb-30">
        <?php foreach ($this->news as $key => $data) { ?>
        <div class="col dsk-4 tbt-4 mob-8 mob-off-2 news-block text-center <?=$key?>">
            <div class="overlay half-green"></div>
            <a target='_blank' href="<?=$data['link']?>" class="block-inline text-mid text-no-decal">
                <?=$data['text']?>
            </a>
        </div>
        <?php } ?>
    </div>
  </div>
</div>
<div class="row">
  <div class="col dsk-8 dsk-off-2 tbt-8 tbt-off-2 mob-10 mob-off-1 col-mt-30 col-mb-30">
    <div class="col-mt-30 col-mb-30">
      <a class="block text-no-decal text-black text-center text-2em" href="/about/">About</a>
    </div>
  </div>
</div>
<div class='text-center col-mb-30'>&#169;<?=date('Y',time())?> RIPE MANAGEMENT</div>
