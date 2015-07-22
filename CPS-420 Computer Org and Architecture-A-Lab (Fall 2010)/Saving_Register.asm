title Saving Registers

org 100h 

.data
Message db "This is a Message.$"

.code
main proc
	
	mov ax,20H            
	mov dx,20H
	
	push ax                ;save ax
	push dx                ;save dx
	
	mov ah,9               ;function display string
	mov dx,offset message  ;dx points to the string
	INT 21H		           ;call DOS 
	
	pop dx		           ;restore dx
	pop ax		           ;restore ax

	mov ax,4C00h
	INT 21H

main endp

end main
