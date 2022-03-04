#!/bin/zsh

open()
{
	clear
	ls ~/projects/
	echo "What do you want to open?"
	read project
	if [[ $project == "s" ]]
	then
		echo "scipping"
		endsession
		clear
		exit
	else
		firefox --new-tab http://localhost:9000/$project &>/dev/null &
	fi
}

opennew()
{
	runnew="true"

	while [[ $runnew == true ]]
	do
		echo "Do you want to open another site? (y/n)"
		read new
		if [[ $new == y ]]
		then
			open
		elif [[ $new == n ]]
		then
			endsession
			runnew="false"
		else
			echo "invalid value"
		fi
	done
}

endsession()
{
	runend="true"
	while [[ $runend == "true" ]]
	do
		echo "Do you want to end your session? (y/n)"
		read end
		if [[ $end == "y" ]]
		then
			killall -9 php &>/dev/null &
			runend="false"
		elif [[ $end == "n" ]]
		then
			opennew
		else
			echo "invalid value"
		fi
	done
}

php -S localhost:9000 -t ~/projects &>/dev/null &

open
opennew

clear
# neofetch
