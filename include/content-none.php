<div class="content-none">
	<?php if( is_404() ){
    	echo '<p>当サイトをご覧頂きありがとうございます。<br>申し訳ありませんが、あなたがアクセスしようとした記事は削除されたかURLが変更されています。お手数をおかけしますが、以下の方法からもう一度目的のページをお探しください。</p>';
	}elseif( is_search() ){
		$r = get_search_query();
		echo '<p>「'.$r.'」で検索しましたが記事が見つかりませんでした。お手数をおかけしますが、以下の方法からもう一度目的の記事をお探しください。</p>';
	} ?>
  <h2>１．検索して見つける</h2>
	  <p>検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。近いテーマのページのリストが表示されます。</p>
	  <div class="widget-box">
	  <?php get_search_form(); ?>
	</div>
  <h2>２．カテゴリーから見つける</h2>
	  <p>それぞれのカテゴリーのトップページからもう一度目的のページをお探しになってみてください。</p>
	  <h3>カテゴリー一覧</h3>
	  <ul class="cat404">
		  <?php
			wp_list_categories(array(
				'title_li'  => '',
				'depth'     => 1
			  )
			);
		  ?>
	  </ul>
</div>