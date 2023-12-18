<?php
session_start();
if (isset($_SESSION['fruits']))
    {
        foreach ($_SESSION['fruits'] as $fruit => $prix) {
            echo "<p>le prix du $fruit est $prix </p>";
        }
    }
    else
    echo "tout est vide!";
