#include <iostream>
#include <stdlib.h>

using namespace std;

struct node
{
		int info;
		node *lp,*rp;
};


class bst{

public:
		node *tree;
		bst()
		{
			tree=NULL;

		};
		int insert();
		int preorder(node *tree);
		int inorder(node *tree);
		int postorder(node *tree);
};


int bst :: insert( )
{
	char flag;
	int info;
	node *cur,*prev,*temp;
	cout << "Enter the Data: ";
	cin >> info;
	while(info != -1)
	{
		if(tree == NULL)
		{
			temp = new node;
			temp -> lp = NULL;
			temp -> rp = NULL;
			temp -> info=info;
			tree=temp;
		}
		else
		{
			cur = tree;
			while(cur !=NULL)
			{
				prev=cur;
				if(info < cur->info)
				{
					flag='L';
					cur=cur->lp;
				}
				else if(info > cur->info )
				{
					flag='R';
					cur=cur->rp;
				}
				else
				{
					cout << "The Node already Exists";
					cin >> flag;
					goto I;
				}
			}
			if(flag == 'L')
			{
				temp = new node;
				prev->lp=temp;
				temp->info=info;
				temp -> lp = NULL;
				temp -> rp = NULL;
			}
			else if(flag == 'R')
			{
				temp = new node;
				prev->rp=temp;
				temp->info=info;
				temp -> lp = NULL;
				temp -> rp = NULL;
			}
		}
		I:
		{
			cout << "Enter the Data";
			cin >> info;
		}
		

	}	
	return 0;
}

int bst ::  preorder(node *tree)
{
	if(tree == NULL)
	{
		cout << "The Tree is empty";

	}
	else
	{
		cout << "\t"<< tree->info;
		if(tree->lp!=NULL)
		{
			preorder(tree->lp);
		}
		if(tree->rp!=NULL)
		{
			preorder(tree->rp);
		}
	}
	return 0;
}
int bst ::  inorder(node *tree)
{
	if(tree == NULL)
	{
		cout << "The Tree is empty";

	}
	else
	{
		
		if(tree->lp!=NULL)
		{
			inorder(tree->lp);
		}
		cout << "\t"<< tree->info;
		if(tree->rp!=NULL)
		{
			inorder(tree->rp);
		}
	}
	return 0;
}

int bst ::  postorder(node *tree)
{
	if(tree == NULL)
	{
		cout << "The Tree is empty";

	}
	else
	{
		
		if(tree->lp!=NULL)
		{
			postorder(tree->lp);
		}
		
		if(tree->rp!=NULL)
		{
			postorder(tree->rp);
		}
		cout << "\t"<< tree->info;
	}
	return 0;
}

int main()
{
	int info;
	bst t;
	t.insert();
	cout << "preorder" << "\n";
	t.preorder(t.tree);
	cout << "postorder" << "\n";
	t.postorder(t.tree);
	cout << "inorder" << "\n";
	t.inorder(t.tree);
	cin >> info;
	return 0;
}

