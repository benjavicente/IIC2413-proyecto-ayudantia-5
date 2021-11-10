#!make

include .env

.PHONY: upload
.SILENT: upload
upload:
	rsync --itemize-changes --update --recursive proyecto-1/ $(HOST_1):~


.PHONY: download
.SILENT: download
download:
	rsync --itemize-changes --update --delete --recursive --exclude='.*' $(HOST_1):~/ proyecto-1/
