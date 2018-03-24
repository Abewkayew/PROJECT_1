package com.example.abewkayew.bookstoreapp;

import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import java.util.ArrayList;

/**
 * Created by user on 3/22/2018.
 */

public class BookRecyclerAdapter extends RecyclerView.Adapter<BookRecyclerAdapter.RecyclerViewHolder>{

    //add the header section for the recycler view....
    private static final int TYPE_HEAD = 0;
    private static final int TYPE_LIST = 1;

    ArrayList<book> arrayList = new ArrayList<>();

    public BookRecyclerAdapter(ArrayList<book> arrayList)
    {
        this.arrayList = arrayList;
    }
    @Override
    public RecyclerViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {

        if(viewType == TYPE_HEAD){
            View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.header_layout, parent, false);
            RecyclerViewHolder recyclerViewHolder = new RecyclerViewHolder(view, viewType);
            return recyclerViewHolder;
        }else if(viewType == TYPE_LIST){
            View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.book_row_layout, parent, false);
            RecyclerViewHolder recyclerViewHolder = new RecyclerViewHolder(view, viewType);
            return recyclerViewHolder;
        }
        return null;
    }

    @Override
    public void onBindViewHolder(RecyclerViewHolder holder, int position) {

        if(holder.viewType == TYPE_LIST){
            //set data for the textViews...
            //get each of the book objects from the arrayList.
            book b = arrayList.get(position-1);
            holder.book_name.setText(b.getBook_name());
            holder.author_name.setText(b.getAuthor_name());
            holder.book_desc.setText(b.getBook_desc());

        }


    }

    @Override
    public int getItemCount() {
        return arrayList.size()-1;
    }
    public static class RecyclerViewHolder extends RecyclerView.ViewHolder{

        TextView book_name, author_name, book_desc;
        int viewType;

        public RecyclerViewHolder(View view, int viewType)
        {
            super(view);
            if(viewType == TYPE_LIST){
                book_name = (TextView)view.findViewById(R.id.book_name);
                author_name = (TextView)view.findViewById(R.id.author_name);
                book_desc =  (TextView)view.findViewById(R.id.book_desc);
                this.viewType = TYPE_LIST;

            }else if(viewType == TYPE_HEAD){
                this.viewType = TYPE_HEAD;
            }

        }
    }

    @Override
    public int getItemViewType(int position) {
        if(position == 0){
              return TYPE_HEAD;
        }
        return TYPE_LIST;

    }
}
