function Assignment
%% Read the two images
I=imread('saturn.png');
IToHide = imread('cameraman.tif');
%% Scale the image to hide to the same size as input image I
[m n c]=size(I);
IToHide = imresize(IToHide, [m n]);

%% Extract individual color channels R,G and B
R=I(:,:,1);
G=I(:,:,2);
B=I(:,:,3);

%% Make the 2-LSBs of each channel 0 to create space for the second image
R = bitshift(R,-2);
R = bitshift(R,2);

G = bitshift(G,-2);
G = bitshift(G,2);

B = bitshift(B,-2);
B = bitshift(B,2);

%% Extract the six MSBs from the image to hide
% bb bb bb bb 

bits7and6 = bitshift(IToHide,-6);

bits5and4 = bitshift(IToHide,2);
bits5and4 = bitshift(bits5and4,-6);

bits3and2 = bitshift(IToHide,4);
bits3and2 = bitshift(bits3and2,-6);

%% Add two bits from second image to R, two to G and two to B
REncoded = bitor(R,bits7and6);
GEncoded = bitor(G,bits5and4);
BEncoded = bitor(B,bits3and2);

%% Combine the three channels to form back a 3 channel colored image
EncodedImage(:,:,1)=REncoded;
EncodedImage(:,:,2)=GEncoded;
EncodedImage(:,:,3)=BEncoded;

figure,imshow(EncodedImage);

%% Assume we transfer the EncodedImage and receive it as recvdImage
recvdImage = EncodedImage;
R=recvdImage(:,:,1);
G=recvdImage(:,:,2);
B=recvdImage(:,:,3);

%% Extract the second image from the received image
R=bitshift(R,6);
G=bitshift(G,6);
G=bitshift(G,-2);
B=bitshift(B,6);
B=bitshift(B,-4);

%% Form the 6-bit image
DecodedImage = bitor(R,G);
DecodedImage = bitor(DecodedImage,B);
figure, imshow(DecodedImage);




