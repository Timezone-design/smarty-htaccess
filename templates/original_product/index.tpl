
{extends file='layout.tpl'}

    {block name="content"}
      <div class="clearfix"></div>
      <div class="original-product">
        <div class="grey-wrapper">
          <div class="clearfix"></div>
          <div class="arrowed-title"><h1 class="ja">製品情報</h1><img src="/assets/img/blue_arrow.svg" alt="Blue Arrow" srcset="" ></div>
          <div class="clearfix"></div>
          <div class="three-tiles ja row">
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/suspension/index.html" class="btn btn-primary btn-lg btn-block" id="suspension"><span>サスペンション</span></a>
            </div>
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/drive/index.html" class="btn btn-primary btn-lg btn-block" id="dirve-train"><span>アーム・ロッド</span></a>
            </div>
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/cooling/index.html" class="btn btn-primary btn-lg btn-block" id="cooling"><span>駆動系</span></a>
            </div>
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/brake/index.html" class="btn btn-primary btn-lg btn-block" id="brake"><span>冷却系</span></a>
            </div>
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/arm/index.html" class="btn btn-primary btn-lg btn-block" id="arm-and-rod"><span>ブレーキ</span></a>
            </div>
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/body/index.html" class="btn btn-primary btn-lg btn-block" id="stiffness"><span>ボディ補強</span></a>
            </div>
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/ex/index.html" class="btn btn-primary btn-lg btn-block" id="exhaust"><span>排気系</span></a>
            </div>
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/intake/index.html" class="btn btn-primary btn-lg btn-block" id="intake"><span>吸気系</span></a>
            </div>
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/interior/index.html" class="btn btn-primary btn-lg btn-block" id="interior"><span>インテリア</span></a>
            </div>
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/engine/index.html" class="btn btn-primary btn-lg btn-block" id="engine"><span>エンジン</span></a>
            </div>
            <div class="three-tiles-one col-md-4 col-sm-4 col-xs-6">
              <a href="/product/other/index.html" class="btn btn-primary btn-lg btn-block" id="other"><span>その他</span></a>
            </div>
          </div>
          <div class="quick-search ja">
            <span>パーツクイックサーチ：</span>
            <select onchange="location.href=this.options[this.selectedIndex].value" name="select2">
              <option value="/index.html" selected="">■KTSオリジナルパーツ　--- 選択して下さい ---</option>
              <option value="/suspension/index.html">【サスペンションパーツ】</option>
              <option value="/suspension/db.html">∟SC DAMPER SYSTEM β</option>
              <option value="/suspension/de_r35.html">∟SC DAMPER SYSTEM γ</option>
              <option value="/suspension/db_zss.html">∟直巻スプリング（2本セット）</option>
              <option value="/suspension/sm_005.html">∟リアメンバーリジッドスペーサー</option>
              <option value="/suspension/sm_004.html">∟リアメンバートラクションスペーサー</option>
              <option value="/suspension/sm_006.html">∟アルミリアメンバーブッシュ</option>
              <option value="/suspension/stabi_link.html">∟調整式スタビライザーリンク</option>
              <option value="/suspension/rc_100f.html">∟ロールセンターアダプター</option>
              <option value="/suspension/hk.html">∟ハイキャスキャンセルロッド</option>
              <option value="/suspension/auto_levelizer.html">∟オートレベライザーリンクキット</option>
              <option value="/drive/index.html">【駆動系パーツ】</option>
              <option value="/drive/ck_n.html">∟強化クラッチキット（ノンアスディスク）</option>
              <option value="/drive/ck_m.html">∟強化クラッチキット（メタルディスク）</option>
              <option value="/drive/ck_k.html">∟強化クラッチキット（カッパーフェーシング）</option>
              <option value="/drive/op.html">∟ビッグキャパオペレーティングシリンダー</option>
              <option value="/drive/pv.html">∟強化ピボット</option>
              <option value="/drive/fw.html">∟超軽量鍛造クロモリフライホイール</option>
              <option value="/drive/differential_member_c.html">∟デフメンバーカラー</option>
              <option value="/drive/se.html">∟デフメンバースペーサー＆マウント</option>
              <option value="/cooling/index.html">【クーリングパーツ】</option>
              <option value="/cooling/ikp.html">∟アルミインテークパイプ</option>
              <option value="/cooling/rp.html">∟アルミラジエーターアッパーホース</option>
              <option value="/cooling/rq.html">∟シリコンラジエーターホースSET</option>
              <option value="/cooling/or_a01.html">∟ラジエーターブリーザータンク</option>
              <option value="/cooling/ow.html">∟アルミラジエーターリザーバータンク</option>
              <option value="/brake/index.html">【ブレーキパーツ】</option>
              <option value="/arm/index.html">【アーム・ロッドパーツ】</option>
              <option value="/body/index.html">【ボディ補強パーツ】</option>
              <option value="/body/tb_sp.html">∟スーパータワーバー</option>
              <option value="/body/y_tb.html">∟L.S TOWER BAR</option>
              <option value="/body/pb.html">∟リアピラーバー</option>
              <option value="/body/lb_101.html">∟SCロアブレースバー</option>
              <option value="/body/rbs_402.html">∟SUPER LOWER ARM BAR</option>
              <option value="/body/lb_003r.html">∟リアサスペンションメンバーブレース</option>
              <option value="/body/rbs_402sf.html">∟SUPER STABI BRACE BAR</option>
              <option value="/body/rg_zp12b.html">∟ロールバーパット</option>
              <option value="/ex/index.html">【エキゾーストパーツ】</option>
              <option value="/ex/fp_w.html">∟60φWオールステンフロントパイプ</option>
              <option value="/ex/ap.html">∟ステンレスアウトレットパイプ</option>
              <option value="/intake/index.html">【インテークパーツ】</option>
              <option value="/intake/kf.html">∟COOL POWER SUCTION KIT</option>
              <option value="/intake/ikp.html">∟アルミインテークパイプ</option>
              <option value="/intake/ikp_302.html">∟PIPING SYSTEM</option>
              <option value="/interior/index.html">【インテリアパーツ】</option>
              <option value="/interior/bb.html">∟フルハーネス3インチシートベルト4点式</option>
              <option value="/interior/bk_rail.html">∟調整式スーパーローポジシートレール</option>
              <option value="/interior/mat.html">∟オーダーメイドフロアーマット</option>
              <option value="/engine/index.html">【エンジンパーツ】</option>
              <option value="/engine/tl.html">∟タービンライン</option>
              <option value="/other/index.html">【その他のパーツ】</option>
              <option value="/other/sa_001.html">∟ダイレクトステアリングカラー</option>
              <option value="/other/srb.html">∟アルミステアリングブッシュ</option>
              <option value="/other/em_001.html">∟強化エンジンマウント</option>
              <option value="/other/sd_001.html">∟強化型ミッションマウント</option>
              <option value="/other/sz.html">∟スピンターンノブ</option>
              <option value="/other/ws_mz.html">∟アルミスペーサー</option>
              <option value="/other/ws_m.html">∟コンビネーションスペーサー</option>
              <option value="/other/ws_n20.html">∟SC ALUMI NUTⅢ</option>
              <option value="/other/ws_n10.html">∟7 Angles Super Nut</option>
              <option value="/other/pl.html">∟SC PULLEY SYSTEM</option>
              <option value="/other/bd.html">∟SC DRY BATTERY</option>
              <option value="/other/dv.html">∟マグネットドレンボルト</option>
              <option value="/other/ed.html">∟エンジンクエークダンパー</option>
              <option value="/other/hs.html">∟SC SILICON HOSE</option>
              <option value="/other/dp.html">∟LOW DOWN大容量オイルパン</option>
              <option value="/other/ot_a01.html">∟LSDオイルキャッチタンク</option>
            </select>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="white-wrapper">
          <div class="clearfix"></div>
          <div class="arrowed-title"><h1 class="ja">ピックアップ車種</h1><img src="/assets/img/blue_arrow.svg" alt="Blue Arrow" srcset="" ></div>
          <div class="clearfix"></div>
          <div class="image-wrapper row">
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="/assets/img/200placeholder.svg" alt="placeholder" class="img-thumbnail"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="/assets/img/200placeholder.svg" alt="placeholder" class="img-thumbnail"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="/assets/img/200placeholder.svg" alt="placeholder" class="img-thumbnail"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="/assets/img/200placeholder.svg" alt="placeholder" class="img-thumbnail"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="/assets/img/200placeholder.svg" alt="placeholder" class="img-thumbnail"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="/assets/img/200placeholder.svg" alt="placeholder" class="img-thumbnail"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="/assets/img/200placeholder.svg" alt="placeholder" class="img-thumbnail"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="/assets/img/200placeholder.svg" alt="placeholder" class="img-thumbnail"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="/assets/img/200placeholder.svg" alt="placeholder" class="img-thumbnail"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="/assets/img/200placeholder.svg" alt="placeholder" class="img-thumbnail"></div>
          </div>
        </div>
      </div>
    {/block}
