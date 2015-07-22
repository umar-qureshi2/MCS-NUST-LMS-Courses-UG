title Hello World Program

org 100h 

.data
hello_message db 'Hello','World',0dh,0ah,'$'

.code
main proc
	mov ax,@data
	mov ds,ax

	mov ah,9
	mov dx,offset hello_message
	INT 21H

	mov ax,4C00h
	INT 21H

main endp

end main