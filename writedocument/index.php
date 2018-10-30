<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="madpanda">

    <meta name="HandheldFriendly" content="true" />
    <meta name="format-detection" content="telephone=no" />

    <title>컨셉 기획서 작성</title>

    <link rel="stylesheet" href="https://job-exp.github.io/files/bootstrap-4/css/bootstrap.min.css">
    <!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script-->
    <script src="https://job-exp.github.io/files/jquery-2.1.4.min.js"></script>
    <script src="https://job-exp.github.io/files/bootstrap-4/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://job-exp.github.io/files/ie8-responsive-file-warning.js"></script>
    <script src="https://job-exp.github.io/files/html5shiv.min.js"></script>
    <script src="https://job-exp.github.io/files/respond.min.js"></script>
    <![endif]-->


    <script>
        function write_document()
        {
            $('#frm').submit();
        }

    </script>
</head>

<body>
<div class="container" style="padding: 20px 0 20px 0; width: 600px">
    <h2>컨셉 기획서 작성하기</h2>
    <p>&nbsp;</p>
    <form id="frm" method="post" action="write.php">
        <div class="form-group">
            <label for="wr_title">기획서 제목</label>
            <input type="text" class="form-control" id="wr_title" name="wr_title" placeholder="">
        </div>
        <div class="form-group">
            <label for="wr_name">작성자 이름</label>
            <input type="text" class="form-control" id="wr_name" name="wr_name" placeholder="">
        </div>
        <div class="form-group">
            <label for="wr_date">작성자 일자</label>
            <input type="text" readonly class="form-control" id="wr_date" name="wr_date" value="<? echo date('Y-m-d'); ?>">
        </div>
        <div class="form-group">
            <label for="wr_document">기획서 작성</label>
            <textarea class="form-control" id="wr_document" name="wr_document" rows="10"></textarea>
        </div>
    </form>
    <p>
        <button class="btn btn-block btn-success" onclick="write_document()">저장하기</button>
    </p>
</div>
</body>

</html>