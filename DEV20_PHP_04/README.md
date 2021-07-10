PHPの第4回目の課題

①課題内容（どんな作品か）<br>
卒業制作にしようと考えている自分だけのレストランランキング（お店の名前と場所とコメントと画像）を<br>
PHPを使って、データベースに登録、表示、更新、削除できるアプリ。<br>
また、新規ユーザー登録機能と、ID、PASS発行済の人用のログイン機能、ログアウト機能もつけて、<br>
登録されたID、PASS以外の人は入れないようにした。<br>

前回からの更新ポイント<br>
・funcs.phpを作り、同じphpコードは使い回しできるように工夫した。<br>
・コメントも追加できるようにした。
・画像のアップロードと、表示をできるようにした。<br>
・ログアウト機能を追加し、ログアウトボタンを押すとログインページに戻れるような仕様にした。<br>


●確認方法<br>
●はじめにnewuser.phpを直打ちして開く<br>

●login.phpでnewuser.phpにて登録済みのIDとPASSを入力<br>

●index.phpに遷移するのでお店情報を登録します。<br>
　店名、
　ログアウトボタンでログアウトも可能。<br>

●お店情報を登録すると、順位表示画面に繊維。<br>


②工夫した点・こだわった点<br>
・店名だけではなく、店の最寄駅と、画像も登録できるようにした。<br>
（画像の更新機能を追加しようとしたが、作動せず）<br>
・select.phpで表示するときに、<br>
1:名前／１位店名(場所)／２位店名(場所)／３位店名(場所)／４位店名(場所)／５位店名(場所)というように、<br>
見やすく文章が表示されるように調整した。<br>
・データの更新ができる機能も実装した。食べログのように店名をたくさん登録するのではなく、<br>
　自分のランキングを更新していく（登録店数は増えない）というのがこのSNSのポイントなので、<br>
上書き機能で実装ができてよかった。<br>
・削除機能も実装して、不要なデータは削除できるようにした。削除のアラート表示までは手が回らなかった。<br>

③質問・疑問（あれば）<br>
画像の表示まではできたが、kousin.phpで画像の更新をすると、<br>
update.phpでエラーが出てしまい、解消できなかった。<br>
画像以外の文字要素（店名、場所、コメント）だけで更新処理を作った時は更新ができたので、<br>
画像の更新・表示の際のコードが間違っていると考えられるが、どこが誤っているか分からず。<br>


④その他（感想、シェアしたいことなんでも）
今回の機能をベースに、地図のAPI連携、登録したお店のピン立てなども今後は実装していきたい。