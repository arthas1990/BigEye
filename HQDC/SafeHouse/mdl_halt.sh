#!/bin/bash
#####################################################################
#####################################################################
######### BigEye Halt Module ########################################
######### In charge : GA.Morteza Soltanabadiyan #####################
######### K1NG 4RTH45 ###############################################
######### shokoohsoft@gmail.com #####################################
######### arthas.1990@yahoo.com #####################################
#####################################################################
#####################################################################

case "$1" in
"mdl_halt")  
    case "$2" in
	"server")   
			case "$3" in
			"shut")  
				bash /sbin/shutdown -h now
				;;
			"reset")   
				bash /sbin/shutdown -r now
				;;
			esac
	;;
	"service")   
			case "$4" in
			"shut")   
				bash /ect/init.d/$3 stop
				;;
			"reset")   
				bash /ect/init.d/$3 restart
				;;
			"reload")   
				bash /ect/init.d/$3 reload
				;;
			esac
	;;
	esac
;;
esac
