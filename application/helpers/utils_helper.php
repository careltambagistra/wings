<?php

function currency($angka)
{
	return "Rp. " . number_format($angka, 2, ",", ".") . ",-";
}