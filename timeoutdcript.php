<!-- If no activity for 1 minutes, display an alert on web page, and then either continue or logout -->
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.js"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.2/jquery-ui.min.js"></script>
<link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.2/themes/ui-lightness/jquery-ui.css" type="text/css" />
<script type="text/javascript">
        // Set timeout variables.
        var timoutWarning = 30000; // Display warning in 1Mins.
        var timoutNow = 60000; // Timeout in 2 mins.
        var logoutUrl = 'logout.php';


        var warningTimer;
        var timeoutTimer;

        // Start timers.
        function StartTimers() {
            warningTimer = setTimeout("IdleWarning()", timoutWarning);
            timeoutTimer = setTimeout("IdleTimeout()", timoutNow);
        }

        // Reset timers.
        function ResetTimers() {
            clearTimeout(warningTimer);
            clearTimeout(timeoutTimer);
            StartTimers();
            $("#timeout").dialog('close');
        }

        // Show idle timeout warning dialog.
        function IdleWarning() {
            $("#timeout").dialog({
                modal: true
            });
        }

        // Logout the user.
        function IdleTimeout() {
            window.location = logoutUrl;
        }
    </script>