<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family:sans-serif;
        }
        @page {
            margin: 75px 25px;
        }

        header {
            position: fixed;
            top: -65px;
            left: 0px;
            right: 0px;
            height: 50px;
            color: black;
            line-height: 35px;
            display:table;
            width:100%
        }
        header div{
            display:table-cell;
            width:33%;
        }
        #date{
            text-align:left;
        }
        #title{
            text-align:center;
        }
        #counter{
            text-align:right;
        }
        .page-number:before {
            content: counter(page);
        }
        /* footer {
            position: fixed; 
            bottom: -60px; 
            left: 0px; 
            right: 0px;
            height: 50px; 


            background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 35px;
        } */

        .content {
            width: 100%;
        }
        .row {
            display: table;
            width: 100%;
            margin-bottom: 5px;
        }
        .label {
            display: table-cell;
            text-align: left;
            width: 50%;
        }
        .value {
            display: table-cell;
            text-align: right;
            width: 50%;
        }
        .label, .value{
            font-size: 0.8rem;
        }
        .thin-hr {
            border: 0;
            border-top: 0.2px solid #000; 
        }
        .bold{
            font-weight:bold;
        }
        .mb{
            margin: 0px 0px 10px 0px;
        }
    </style>
</head>
<body>

    <header>
        <div id="date">
            <?php echo date("Y-m-d") ?>
        </div>
        <div id="title">
            Title
        </div>
        <div id="counter">
            <span class="page-number"></span>
        </div>
    </header>
    <!-- 
    <footer>
        Copyright &copy; <?php echo date("Y");?> 
    </footer> -->


    <main> 
        <h2 style="text-align:center">Summary Report</h2>
        <hr class="thin-hr">
        <div class="content bold">
            <div class="row">
                <div class="label">Date : <?php echo date("d/m/Y");?></div>
                <div class="value">Company: P-Eatery & Hi Bi Ni U Coffee</div>
            </div>
            <hr class="thin-hr">
            <div class="row">
                <div class="label"></div>
                <div class="value">Report Time: <?php echo date("d/m/Y h:i:s")?></div>
            </div>
        </div>

        <div class="content">
            <div class="row">
                <div class="label" style="font-size:1.5rem">Revenue</div>
            </div>
            <div class="mb"></div>
            @foreach($data as $item => $value)
                <hr class="thin-hr">
                <div class="row">
                    <div class="label">{{$item}}</div>
                    <div class="value">{{$value}}</div>
                </div>
            @endforeach

            <div style="margin-top:30px"></div>

            <hr class="thin-hr">
            <div class="row">
                <div class="label">Total Guest</div>
                <div class="value">50</div>
            </div>

            <hr class="thin-hr">
            <div class="row">
                <div class="label">Average per Guest</div>
                <div class="value">Rp 289.916,58</div>
            </div>

            <div style="margin-top:30px"></div>

            <hr class="thin-hr">
            <div class="row">
                <div class="label">No. of Invoices</div>
                <div class="value">50</div>
            </div>

            <hr class="thin-hr">
            <div class="row">
                <div class="label">Average per Invoices</div>
                <div class="value">Rp 289.916,58</div>
            </div>

        </div>

        <div style="margin-top:50px"></div>

        <div class="content">
            <div class="row">
                <div class="label" style="font-size:1.5rem">Payments</div>
            </div>
            <div class="mb"></div>

            @foreach($payments as $item => $value)

                <div class="row">
                    <div class="label">{{$item}}</div>
                    <div class="value">{{$value}}</div>
                </div>
                <hr class="thin-hr">

            @endforeach

            <div style="margin-top:50px"></div>
        </div>

    </main>
</body>
</html>