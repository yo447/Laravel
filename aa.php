<!--======== 前略 ========-->

<body>
    <h2>
        <?php
        $str = 'Appleが5個あります。Orangeは1個しかありません。';

        echo '検索対象：' . $str;
        ?>
    </h2>
    <p>
        <?php
        echo '英数字が含まれているかどうかを正規表現で検索し、検索結果を配列に代入します。<br>';

        if (preg_match_all('/[a-zA-Z0-9]/', $str, $results)) {
            echo '>検索結果：';
            print_r($results);
        } else {
            echo '>正規表現に一致しませんでした。';
        }
        ?>
    </p>
    <p>
        <?php
        echo '1回以上繰り返されている（1文字以上の）英数字が含まれているかどうかを正規表現で検索し、検索結果を配列に代入します。<br>';

        if (preg_match_all('/[a-zA-Z0-9]*/', $str, $results)) {
            echo '>検索結果：';
            print_r($results);
        } else {
            echo '>正規表現に一致しませんでした。';
        }
        ?>
    </p>
</body>

</html>