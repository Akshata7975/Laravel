import React, { useState } from 'react';
import axios from 'axios';
import './productform.css';

const productform = ({ onProductAdded }) => {
    const [product, setProduct] = useState({
        name: '',
        description: '',
        price: '',
        quantity: ''
    });

    const handleChange = (e) => {
        const { name, value } = e.target;
        setProduct({ ...product, [name]: value });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        if (product.name && product.description && product.price && product.quantity) {
            try {
                const response = await axios.post('/api/products', product);
                onProductAdded(response.data);
                setProduct({
                    name: '',
                    description: '',
                    price: '',
                    quantity: ''
                });
            } catch (error) {
                console.error("There was an error adding the product!", error);
            }
        }
    };

    return (
        <form onSubmit={handleSubmit} className="product-form">
            <input
                type="text"
                name="name"
                value={product.name}
                onChange={handleChange}
                placeholder="Product Name"
                required
            />
            <input
                type="text"
                name="description"
                value={product.description}
                onChange={handleChange}
                placeholder="Description"
                required
            />
            <input
                type="number"
                name="price"
                value={product.price}
                onChange={handleChange}
                placeholder="Price"
                required
            />
            <input
                type="number"
                name="quantity"
                value={product.quantity}
                onChange={handleChange}
                placeholder="Quantity"
                required
            />
            <button type="submit">Add Product</button>
        </form>
    );
};

export default productform;

