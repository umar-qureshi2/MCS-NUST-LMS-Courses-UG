%
% [kcentre,owner,sqrerr] = kmeans2(data, initialcentres)
%
%
% Input:
%   data = [NxL] matrix (N=number of data points, L=dimensionality)
%   initialcentres = scalar value (i.e. the 'K' in K-means, how many clusters)
%                    or a KxL matrix, defining the initial centres
%
% Output:
%   kcentre = KxL matrix of final cluster centres
%   owner = Nx1 vector indicating which cluster a point belongs to
%   sqrerr = sum of squared errors (squared distances from nearest cluster centre)
%
function [kcentre,owner,sqrerr] = kmeans2(data, initialcentres)

N = size(data,1); % num data points
L = size(data,2); % num variables

if (max(size(initialcentres))==1)
    % I've been given the scalar value K...setup centres at first K data points
    K = initialcentres;
    initialcentres = data(1:K,:);
end

if (size(initialcentres,2) ~= L)
    initialcentres = initialcentres';
    warning('Want a KxL matrix... flipping matrix');
end

if (size(initialcentres,2) ~= L)
    error('wrong size matrix: initialcentres');
end

K = size(initialcentres,1); % num clusters


kcentre = initialcentres; % K * L
ownerchange = 1;
owner = zeros(N,1);
while (ownerchange > 0)
    oldkcentre = kcentre;

    % Do clustering
    % compute squared error
    % for each point
    sqrerr = 0;
    ownerchange = 0;
    for i = 1:N
        % find distance to each cluster centre
        best = 0;
        bestdist = 10^100;
        for j = 1:K
            dist = sum((data(i,:) - kcentre(j,:)).^2);
            if (dist < bestdist)
                best=j;
                bestdist=dist;
            end
        end
        sqrerr = sqrerr + bestdist;

        % pick closest centre, and note if a point changes cluster
        if (owner(i) ~= best)
            owner(i) = best;
            ownerchange = 1;
        end
    end


    % Recalculate cluster centres for each cluster
    for i = 1:K
        total = sum(owner==i);
        % for each variable
        if (total > 0)
            for j = 1:L
                kcentre(i,j) = sum((owner==i).*(data(:,j))) / total;
            end
        else
            % This cluster has no members!
            warning('random centre created');
            kcentre(i,:) = data(floor(rand*N)+1,:)+(10^-10)*randn(1,L);
        end
    end

end


