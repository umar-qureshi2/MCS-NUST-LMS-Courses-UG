%% Performs K-means Segmentation
function bw=kmeansSegmentation(I)
K=5;
  
%% Extract three channels
  R=I(:,:,1);
  G=I(:,:,2);
  B=I(:,:,3);
    
  R=reshape(R,1,[]);
  G=reshape(G,1,[]);
  B=reshape(B,1,[]);
    
%% Datamatrix for kmeans
    dataMatrix=[R;G;B];
    dataMatrix =double( dataMatrix');
    
%% Apply k-means
    %[c indices]=kmeans2(dataMatrix,C); %If using function kmeans2
    indices=kmeans(dataMatrix,K);%If using kmeans (stats toolbox)
    
%% Prepare output image

    bw=zeros(size(dataMatrix));
    
    i1=find(indices==1);
    bw(i1,1)=255;
    bw(i1,2)=0;
    bw(i1,3)=0;
    
    i2=find(indices==2);
    bw(i2,1)=0;
    bw(i2,2)=255;
    bw(i2,3)=0;
    
    i3=find(indices==3);
    bw(i3,1)=0;
    bw(i3,2)=0;
    bw(i3,3)=255;

    i4=find(indices==4);
    bw(i4,1)=255;
    bw(i4,2)=255;
    bw(i4,3)=0;
    
    i5=find(indices==5);
    bw(i5,1)=255;
    bw(i5,2)=0;
    bw(i5,3)=255;
    
%% Reshape and dispay

    bw=reshape(bw,size(I,1),size(I,2),3);
    imshow(bw);
    
    
end