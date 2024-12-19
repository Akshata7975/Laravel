import React, { useEffect, useState } from 'react';
import axios from 'axios';
import ProductForm from './productform';
import './productlist.css';

const ProductList = () => {
    const [products, setProducts] = useState([]);

    useEffect(() => {
        const fetchProducts = async () => {
            try {
                const response = await axios.get('/api/products');
                setProducts(response.data);
            } catch (error) {
                console.error("There was an error fetching the products!", error);
            }
        };

        fetchProducts();
    }, []);

    const handleProductAdded = (newProduct) => {
        setProducts([...products, newProduct]);
    };

    return (
        <div className="product-grid">
            <ProductForm onProductAdded={handleProductAdded} />
            {products.map((product) => (
                <div key={product.id} className="product-box">
                    <h3>{product.name}</h3>
                    <p>{product.description}</p>
                    <p className="price">${product.price}</p>
                    <p>Quantity: {product.quantity}</p>
                </div>
            ))}
        </div>
    );
};

export default productlist;
