import React from 'react';
import { useState } from 'react';

export default function BeneficiaryIndex() {
    const [results, setResults] = useState<{ execution_time: number; beneficiary_count: number } | null>(null);
    const [loading, setLoading] = useState(false);

    const fetchData = async (type: 'cache' | 'no-cache') => {
        setLoading(true);
        try {
            const response = await fetch(`/beneficiaries/active/${type}`);
            const data = await response.json();
            setResults(data);
        } catch (error) {
            console.error('Error fetching data:', error);
            setResults(null);
        } finally {
            setLoading(false);
        }
    };

    const updateBeneficiary = async () => {
        setLoading(true);
        try {
            const response = await fetch(`/beneficiaries/update/123`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': (document.querySelector('meta[name="csrf-token"]') as HTMLMetaElement)?.content || '',
                },
                body: JSON.stringify({
                    first_name: 'Updated Name',
                    last_name: 'Updated Last Name',
                    status: 'active',
                }),
            });

            const data = await response.json();

            alert(`Beneficiary updated successfully: ${data.first_name} ${data.last_name}`);
        } catch (error) {
            console.error('Error updating beneficiary:', error);
            alert(`Error updating beneficiary: ${error}`); // Simplified error handling
        } finally {
            setLoading(false);
        }
    };

    return (
        <div className="min-h-screen flex items-center justify-center bg-gray-100">
            <div className="bg-white shadow-xl rounded-lg p-8 max-w-lg w-full text-center">

                <h1 className="text-2xl font-bold text-gray-800 mb-4">Beneficiary Performance Testing</h1>

                <div className="flex justify-center gap-3 flex-wrap mb-6">
                    <button
                        onClick={() => fetchData('cache')}
                        className="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition shadow"
                    >
                        Fetch with Cache
                    </button>
                    <button
                        onClick={() => fetchData('no-cache')}
                        className="bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 px-4 rounded transition shadow"
                    >
                        Fetch without Cache
                    </button>
                    <button
                        onClick={updateBeneficiary}
                        className="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded transition shadow"
                    >
                        Update Beneficiary
                    </button>
                </div>

                <div className="text-sm text-gray-700 min-h-[60px]">
                    {loading && <p className="animate-pulse text-blue-600">Running test...</p>}
                    {!loading && results && (
                        <div className="mt-4 p-4 border-l-4 border-green-600 bg-green-100 text-green-900 rounded">
                            <p><strong>Query Time:</strong> {results.execution_time.toFixed(3)} seconds</p>
                            <p><strong>Beneficiaries Returned:</strong> {results.beneficiary_count}</p>
                        </div>
                    )}
                    {!loading && !results && (
                        <p>Run a test to see results.</p>
                    )}
                </div>
            </div>
        </div>
    );
}
