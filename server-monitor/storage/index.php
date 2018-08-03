<?php include "../head_message.html"; ?>
<!DOCTYPE html>
<html lang="en-gb">
<head>

    <!-- title at the top of the screen -->
    <title>Server monitor</title>

    <!-- google font for better styling -->
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:500|Open+Sans" rel="stylesheet">
    <!-- jQuery is required for the scripts that retrieve the data -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- main styling -->
    <link rel="stylesheet" type="text/css" href="../server-monitor.css" />
    <meta name="viewport" content="width=screen-width, initial-scale=1.0" />

</head>
<body>

    <div class="main_container">
        <div class="top_title">
            <h1>server monitor</h1>
        </div>
        <div class="content detail_content">

            <div class="detail_left">
                <table class="large_table">
                    <tbody>

                        <tr>
                            <td>
                                Total storage
                            </td>
                            <td>
                                <span data-output="storage_total" data-output-process>-</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Used storage
                            </td>
                            <td>
                                <span data-output="storage_used" data-output-process>-</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Free storage
                            </td>
                            <td>
                                <span data-output="storage_free" data-output-process>-</span>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <h2 class="small_table_title">details</h2>
                <table class="small_table">
                    <tbody>

                        <tr>
                            <td>
                                Total storage (bytes)
                            </td>
                            <td>
                                <span data-output="storage_total">-</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Used storage (bytes)
                            </td>
                            <td>
                                <span data-output="storage_used">-</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Free storage (bytes)
                            </td>
                            <td>
                                <span data-output="storage_free">-</span>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <table class="small_table">
                    <tbody>

                        <tr>
                            <td>
                                Total storage (% of total)
                            </td>
                            <td>
                                <span data-output="storage_total" data-output-percent>-</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Used storage (% of total)
                            </td>
                            <td>
                                <span data-output="storage_used" data-output-percent>-</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Free storage (% of total)
                            </td>
                            <td>
                                <span data-output="storage_free" data-output-percent>-</span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="detail_right">

            </div>

        </div>
    </div>

    <!-- script for updating the statistics
         also set the location of the get.php file relative to this file -->
    <script>var get_loc; get_loc = "../get.php";</script>
    <script type="text/javascript" src="../server-monitor.js"></script>

</body>
</html>
