title Saving Registers

org 100h 

.data   
array db 10h,20h,30h,40h

.code
main proc
	
	
	mov al, array
	mov bl, array+1
	mov cl, array+2
	mov dl,array+3

	
main endp

end main
