<?php include dirname(__DIR__)."/init.php"; ?>
<?php include "../head_message.php"; ?>
<!DOCTYPE html>
<html lang="en-gb">
<head>

    <title>Server monitor</title>

    <base href="../" />
    <?php include "../top.php"; ?>

</head>
<body>

    <div class="main_container">
        <?php include dirname(__DIR__)."/top_title.php"; ?>
        <div class="content detail_content">

            <div class="detail_left">
                <div class="graph_container mobile_graph_container"
                     data-output-graph="cpu_usage_total">
                </div>
                <table class="large_table">
                    <tbody>

                        <tr>
                            <td>
                                CPU usage (total)
                            </td>
                            <td>
                                <span data-output="cpu_usage_total" data-output-colored>-</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                CPU usage (core 0)
                            </td>
                            <td>
                                <span data-output="cpu_usage_core0" data-output-colored>-</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                CPU usage (core 1)
                            </td>
                            <td>
                                <span data-output="cpu_usage_core1" data-output-colored>-</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                CPU usage (core 2)
                            </td>
                            <td>
                                <span data-output="cpu_usage_core2" data-output-colored>-</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                CPU usage (core 3)
                            </td>
                            <td>
                                <span data-output="cpu_usage_core3" data-output-colored>-</span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="detail_right">
                <h1>CPU usage - total (%)</h1>
                <div class="graph_container"
                     data-output-graph="cpu_usage_total">
                </div>

                <h1>CPU usage - core 0 (%)</h1>
                <div class="graph_container"
                     data-output-graph="cpu_usage_core0">
                </div>

                <h1>CPU usage - core 1 (%)</h1>
                <div class="graph_container"
                     data-output-graph="cpu_usage_core1">
                </div>

                <h1>CPU usage - core 2 (%)</h1>
                <div class="graph_container"
                     data-output-graph="cpu_usage_core2">
                </div>

                <h1>CPU usage - core 3 (%)</h1>
                <div class="graph_container"
                     data-output-graph="cpu_usage_core3">
                </div>
            </div>

        </div>
    </div>

</body>
</html>
